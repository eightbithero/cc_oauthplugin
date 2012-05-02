<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lmaxim
 * Date: 4/26/12
 * Time: 4:43 PM
 * To change this template use File | Settings | File Templates.
 */


/**
 * Sample OAuth2 Library Redis Implementation.
 */

class sfOAuth2PersistentServer extends OAuth2
{
	private $db;
	private $user_id;

	/**
	 * Overrides OAuth2::__construct().
	 */
	public function __construct()
	{
		parent::__construct();
		$this->db = sfRediska::getInstance('app');
	}


	/**
	 * Implements OAuth2::checkClientCredentials().
	 *
	 */
	protected function checkClientCredentials($consumer_key, $consumer_secret = NULL)
	{
		$consumer = $this->db->get("consumers:$consumer_key");
		if(isset($consumer['consumer_secret']) && $consumer['consumer_secret'] !== $consumer_secret)
		{
			$consumer = NULL;
		}
		return $consumer !== NULL;
	}

	/**
	 * Implements OAuth2::getRedirectUri().
	 */
	protected function getRedirectUri($consumer_key)
	{
		$uri = $this->db->get("consumers:$consumer_key");
		if(!isset($uri['redirect_uri']))
		{
			$uri = NULL;
		}

		return $uri !== NULL ? $uri["redirect_uri"] : FALSE;
	}

	/**
	 * Implements OAuth2::getAccessToken().
	 */
	protected function getAccessToken($oauth_token)
	{
		#return $this->db->tokens->findOne(array("_id" => $oauth_token));
		return $this->db->get("tokens:$oauth_token");
	}

	public function getPublicAccessToken($oauth_token)
	{
		return $this->getAccessToken($oauth_token);
	}

	/**
	 * Implements OAuth2::setAccessToken().
	 */
	protected function setAccessToken($oauth_token, $client_id, $expires, $scope = NULL)
	{
		$this->db->set("tokens:$oauth_token", array(
												   "client_id" => $client_id,
												   "user_id" => $this->user_id,
												   "expires" => $expires,
												   "scope" => $scope
											  ));
	}

	/**
	 * Overrides OAuth2::getSupportedGrantTypes().
	 */
	protected function getSupportedGrantTypes()
	{
		return array(
			OAUTH2_GRANT_TYPE_AUTH_CODE,
		);
	}

	/**
	 * Overrides OAuth2::getAuthCode().
	 */
	protected function getAuthCode($code)
	{
		$stored_code = $this->db->get("auth_codes:$code");
		return $stored_code !== NULL ? $stored_code : FALSE;
	}

	public function getAuthCodePublic($code)
	{
		return $this->getAuthCode($code);
	}


	/**
	 * Overrides OAuth2::setAuthCode().
	 */
	protected function setAuthCode($code, $consumer_key, $redirect_uri, $expires, $scope = NULL)
	{

		$expires = OAUTH2_DEFAULT_AUTH_CODE_LIFETIME * 10000;

		$this->db->setAndExpire("auth_codes:$code", array(
														 "client_id" => $consumer_key,
														 "user_id" => $this->user_id,
														 "redirect_uri" => $redirect_uri,
														 "expires" => time() + $expires,
														 "scope" => $scope
													), $expires);


	}

	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}

	public function getConsumer($consumer_key)
	{
		$consumer = $this->db->get("consumers:$consumer_key");
		return $consumer !== NULL ? $consumer : FALSE;
	}

	public function setConsumer($consumer_key,
		$consumer_secret,
		$name,
		$description,
		$base_domain,
		$callback,
		$scope = '',
		$number_query)
	{
		$this->db->set("consumers:$consumer_key", array(
													   "consumer_key" => $consumer_key,
													   "consumer_secret" => $consumer_secret,
													   "name" => $name,
													   "description" => $description,
													   "protocol" => 2,
													   "base_domain" => $base_domain,
													   "callback" => $callback,
													   "scope" => $scope,
													   "number_query" => $number_query
												  ));
	}

	protected function createAuthCode($client_id, $redirect_uri, $scope = NULL)
	{
		$code = $this->genAuthCode();
		$this->setAuthCode($code, $client_id, $redirect_uri, time() + $this->getVariable('auth_code_lifetime', OAUTH2_DEFAULT_AUTH_CODE_LIFETIME), $scope);
		return $code;
	}

	public function authorizeApplication($consumerId, $userId, $scope)
	{
		$this->db->set("userscope:$userId:$consumerId", $scope);
	}


	public function deleteToken($oauth_token)
	{
		$this->db->del("tokens:$oauth_token");
	}

	/**
	 * Check if an application has already been accepted by an user
	 * @param integer $consumerId
	 * @param integer $userId
	 * @param string $scope
	 * @return boolean
	 */
	public function isApplicationAuthorized($consumerId, $userId, $scope)
	{

		if(!$scope) // If an application has no permission, it is automatically authorized
		{
			return true;
		}

		$dbscope = $this->db->get("userscope:$userId:$consumerId", $scope);

		if(!$dbscope)
		{
			return false;
		}

		$permissions = explode($dbscope, ' ');
		$scope = explode($scope, ' ');

		if(array_diff($permissions, $scope) == Array()) //looks like indian code here
		{
			return true;
		}
		else
		{
			return false;
		}

	}

}
