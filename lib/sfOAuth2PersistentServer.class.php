<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lmaxim
 * Date: 4/26/12
 * Time: 4:43 PM
 * To change this template use File | Settings | File Templates.
 */



/**
 * Sample OAuth2 Library Mongo DB Implementation.
 */
require_once(sfConfig::get('sf_plugins_dir').'/sfRediskaPlugin/lib/sfRediska.class.php');

class sfOAuth2PersistentServer extends OAuth2 {
	private $db;
	private $scope;
	private $user_id;

  /**
   * Overrides OAuth2::__construct().
   */
  public function __construct() {
    parent::__construct();

    //$mongo = new Mongo(MONGO_CONNECTION);
	//$this->db = $mongo->selectDB(MONGO_DB);
	  
    $this->db = sfRediska::getInstance('app');

  }

  /**
   * Little helper function to add a new client to the database.
   *
   * Do NOT use this in production! This sample code stores the secret
   * in plaintext!
   *
   * @param $client_id
   *   Client identifier to be stored.
   * @param $client_secret
   *   Client secret to be stored.
   * @param $redirect_uri
   *   Redirect URI to be stored.
   */
  public function addClient($client_id, $client_secret, $redirect_uri) {
	$this->db->set("clients:$client_id", array(
      "pw" => $client_secret,
      "redirect_uri" => $redirect_uri
    ));

/*    $this->db->clients->insert(array(
      "_id" => $client_id,
      "pw" => $client_secret,
      "redirect_uri" => $redirect_uri
    ));*/
  }

  /**
   * Implements OAuth2::checkClientCredentials().
   *
   * Do NOT use this in production! This sample code stores the secret
   * in plaintext!
   */


	 protected function checkClientCredentials($client_id, $client_secret = NULL) {
	  }

//  protected function checkClientCredentials($client_id, $client_secret = NULL) {
//    $client = $this->db->get("clients:$client_id");
//	if (isset($client['pw']) && $client['pw'] !== $client_secret)
//		$client = NULL;
////    $client = $this->db->clients->findOne(array("_id" => $client_id, "pw" => $client_secret));
//    return $client !== NULL;
//  }

  /**
   * Implements OAuth2::getRedirectUri().
   */
  protected function getRedirectUri($client_id) {
	$uri = $this->db->get("clients:$client_id");
	if (!isset($uri['redirect_uri']))
		$uri = NULL;
//    $uri = $this->db->clients->findOne(array("_id" => $client_id), array("redirect_uri"));
    return $uri !== NULL ? $uri["redirect_uri"] : FALSE;
  }

  /**
   * Implements OAuth2::getAccessToken().
   */
  protected function getAccessToken($oauth_token) {
    #return $this->db->tokens->findOne(array("_id" => $oauth_token));
    return $this->db->get("tokens:$oauth_token");
  }

  /**
   * Implements OAuth2::setAccessToken().
   */
  protected function setAccessToken($oauth_token, $client_id, $expires, $scope = NULL) {
	$this->db->set("tokens:$oauth_token", array(
      "client_id" => $client_id,
      "expires" => $expires,
      "scope" => $scope
    ));

//    $this->db->tokens->insert(array(
//      "_id" => $oauth_token,
//      "client_id" => $client_id,
//      "expires" => $expires,
//      "scope" => $scope
//    ));
  }

  /**
   * Overrides OAuth2::getSupportedGrantTypes().
   */
  protected function getSupportedGrantTypes() {
    return array(
      OAUTH2_GRANT_TYPE_AUTH_CODE,
    );
  }

  /**
   * Overrides OAuth2::getAuthCode().
   */
  protected function getAuthCode($code) {
    $stored_code = $this->db->get("auth_codes:$code");
//    $stored_code = $this->db->auth_codes->findOne(array("_id" => $code));
    return $stored_code !== NULL ? $stored_code : FALSE;
  }

  /**
   * Overrides OAuth2::setAuthCode().
   */
  protected function setAuthCode($code, $client_id, $redirect_uri, $expires, $scope = NULL) {
	$this->db->set("auth_codes:$code", array(
      "client_id" => $client_id,
      "redirect_uri" => $redirect_uri,
      "expires" => $expires,
      "scope" => $scope
    ));

//    $this->db->auth_codes->insert(array(
//      "_id" => $code,
//      "client_id" => $client_id,
//      "redirect_uri" => $redirect_uri,
//      "expires" => $expires,
//      "scope" => $scope
//    ));
  }

	public function setUserId($user_id)
	 {
			$this->user_id = $user_id;
	}


}
