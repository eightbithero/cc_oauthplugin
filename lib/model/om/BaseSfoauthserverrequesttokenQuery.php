<?php


/**
 * Base class that represents a query for the 'sfoauthserverrequesttoken' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.4 on:
 *
 * Sat May  5 15:24:28 2012
 *
 * @method     SfoauthserverrequesttokenQuery orderByToken($order = Criteria::ASC) Order by the token column
 * @method     SfoauthserverrequesttokenQuery orderBySecret($order = Criteria::ASC) Order by the secret column
 * @method     SfoauthserverrequesttokenQuery orderByConsumerId($order = Criteria::ASC) Order by the consumer_id column
 * @method     SfoauthserverrequesttokenQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     SfoauthserverrequesttokenQuery orderByCallback($order = Criteria::ASC) Order by the callback column
 * @method     SfoauthserverrequesttokenQuery orderByScope($order = Criteria::ASC) Order by the scope column
 * @method     SfoauthserverrequesttokenQuery orderByExpires($order = Criteria::ASC) Order by the expires column
 * @method     SfoauthserverrequesttokenQuery orderByProtocole($order = Criteria::ASC) Order by the protocole column
 * @method     SfoauthserverrequesttokenQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SfoauthserverrequesttokenQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     SfoauthserverrequesttokenQuery groupByToken() Group by the token column
 * @method     SfoauthserverrequesttokenQuery groupBySecret() Group by the secret column
 * @method     SfoauthserverrequesttokenQuery groupByConsumerId() Group by the consumer_id column
 * @method     SfoauthserverrequesttokenQuery groupByUserId() Group by the user_id column
 * @method     SfoauthserverrequesttokenQuery groupByCallback() Group by the callback column
 * @method     SfoauthserverrequesttokenQuery groupByScope() Group by the scope column
 * @method     SfoauthserverrequesttokenQuery groupByExpires() Group by the expires column
 * @method     SfoauthserverrequesttokenQuery groupByProtocole() Group by the protocole column
 * @method     SfoauthserverrequesttokenQuery groupById() Group by the id column
 * @method     SfoauthserverrequesttokenQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     SfoauthserverrequesttokenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SfoauthserverrequesttokenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SfoauthserverrequesttokenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SfoauthserverrequesttokenQuery leftJoinSfoauthserverconsumer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sfoauthserverconsumer relation
 * @method     SfoauthserverrequesttokenQuery rightJoinSfoauthserverconsumer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sfoauthserverconsumer relation
 * @method     SfoauthserverrequesttokenQuery innerJoinSfoauthserverconsumer($relationAlias = null) Adds a INNER JOIN clause to the query using the Sfoauthserverconsumer relation
 *
 * @method     SfoauthserverrequesttokenQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     SfoauthserverrequesttokenQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     SfoauthserverrequesttokenQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     Sfoauthserverrequesttoken findOne(PropelPDO $con = null) Return the first Sfoauthserverrequesttoken matching the query
 * @method     Sfoauthserverrequesttoken findOneOrCreate(PropelPDO $con = null) Return the first Sfoauthserverrequesttoken matching the query, or a new Sfoauthserverrequesttoken object populated from the query conditions when no match is found
 *
 * @method     Sfoauthserverrequesttoken findOneByToken(string $token) Return the first Sfoauthserverrequesttoken filtered by the token column
 * @method     Sfoauthserverrequesttoken findOneBySecret(string $secret) Return the first Sfoauthserverrequesttoken filtered by the secret column
 * @method     Sfoauthserverrequesttoken findOneByConsumerId(int $consumer_id) Return the first Sfoauthserverrequesttoken filtered by the consumer_id column
 * @method     Sfoauthserverrequesttoken findOneByUserId(int $user_id) Return the first Sfoauthserverrequesttoken filtered by the user_id column
 * @method     Sfoauthserverrequesttoken findOneByCallback(string $callback) Return the first Sfoauthserverrequesttoken filtered by the callback column
 * @method     Sfoauthserverrequesttoken findOneByScope(string $scope) Return the first Sfoauthserverrequesttoken filtered by the scope column
 * @method     Sfoauthserverrequesttoken findOneByExpires(int $expires) Return the first Sfoauthserverrequesttoken filtered by the expires column
 * @method     Sfoauthserverrequesttoken findOneByProtocole(int $protocole) Return the first Sfoauthserverrequesttoken filtered by the protocole column
 * @method     Sfoauthserverrequesttoken findOneById(int $id) Return the first Sfoauthserverrequesttoken filtered by the id column
 * @method     Sfoauthserverrequesttoken findOneByCreatedAt(string $created_at) Return the first Sfoauthserverrequesttoken filtered by the created_at column
 *
 * @method     array findByToken(string $token) Return Sfoauthserverrequesttoken objects filtered by the token column
 * @method     array findBySecret(string $secret) Return Sfoauthserverrequesttoken objects filtered by the secret column
 * @method     array findByConsumerId(int $consumer_id) Return Sfoauthserverrequesttoken objects filtered by the consumer_id column
 * @method     array findByUserId(int $user_id) Return Sfoauthserverrequesttoken objects filtered by the user_id column
 * @method     array findByCallback(string $callback) Return Sfoauthserverrequesttoken objects filtered by the callback column
 * @method     array findByScope(string $scope) Return Sfoauthserverrequesttoken objects filtered by the scope column
 * @method     array findByExpires(int $expires) Return Sfoauthserverrequesttoken objects filtered by the expires column
 * @method     array findByProtocole(int $protocole) Return Sfoauthserverrequesttoken objects filtered by the protocole column
 * @method     array findById(int $id) Return Sfoauthserverrequesttoken objects filtered by the id column
 * @method     array findByCreatedAt(string $created_at) Return Sfoauthserverrequesttoken objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.sfOauthPropelServerPlugin.lib.model.om
 */
abstract class BaseSfoauthserverrequesttokenQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseSfoauthserverrequesttokenQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Sfoauthserverrequesttoken', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SfoauthserverrequesttokenQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SfoauthserverrequesttokenQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SfoauthserverrequesttokenQuery) {
			return $criteria;
		}
		$query = new SfoauthserverrequesttokenQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Sfoauthserverrequesttoken|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = SfoauthserverrequesttokenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(SfoauthserverrequesttokenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Sfoauthserverrequesttoken A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT TOKEN, SECRET, CONSUMER_ID, USER_ID, CALLBACK, SCOPE, EXPIRES, PROTOCOLE, ID, CREATED_AT FROM sfoauthserverrequesttoken WHERE ID = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Sfoauthserverrequesttoken();
			$obj->hydrate($row);
			SfoauthserverrequesttokenPeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Sfoauthserverrequesttoken|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the token column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByToken('fooValue');   // WHERE token = 'fooValue'
	 * $query->filterByToken('%fooValue%'); // WHERE token LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $token The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByToken($token = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($token)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $token)) {
				$token = str_replace('*', '%', $token);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::TOKEN, $token, $comparison);
	}

	/**
	 * Filter the query on the secret column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySecret('fooValue');   // WHERE secret = 'fooValue'
	 * $query->filterBySecret('%fooValue%'); // WHERE secret LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $secret The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterBySecret($secret = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($secret)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $secret)) {
				$secret = str_replace('*', '%', $secret);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::SECRET, $secret, $comparison);
	}

	/**
	 * Filter the query on the consumer_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByConsumerId(1234); // WHERE consumer_id = 1234
	 * $query->filterByConsumerId(array(12, 34)); // WHERE consumer_id IN (12, 34)
	 * $query->filterByConsumerId(array('min' => 12)); // WHERE consumer_id > 12
	 * </code>
	 *
	 * @see       filterBySfoauthserverconsumer()
	 *
	 * @param     mixed $consumerId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByConsumerId($consumerId = null, $comparison = null)
	{
		if (is_array($consumerId)) {
			$useMinMax = false;
			if (isset($consumerId['min'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::CONSUMER_ID, $consumerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($consumerId['max'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::CONSUMER_ID, $consumerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::CONSUMER_ID, $consumerId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserId(1234); // WHERE user_id = 1234
	 * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
	 * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
	 * </code>
	 *
	 * @see       filterBysfGuardUser()
	 *
	 * @param     mixed $userId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the callback column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCallback('fooValue');   // WHERE callback = 'fooValue'
	 * $query->filterByCallback('%fooValue%'); // WHERE callback LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $callback The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByCallback($callback = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($callback)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $callback)) {
				$callback = str_replace('*', '%', $callback);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::CALLBACK, $callback, $comparison);
	}

	/**
	 * Filter the query on the scope column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByScope('fooValue');   // WHERE scope = 'fooValue'
	 * $query->filterByScope('%fooValue%'); // WHERE scope LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $scope The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByScope($scope = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($scope)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $scope)) {
				$scope = str_replace('*', '%', $scope);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::SCOPE, $scope, $comparison);
	}

	/**
	 * Filter the query on the expires column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByExpires(1234); // WHERE expires = 1234
	 * $query->filterByExpires(array(12, 34)); // WHERE expires IN (12, 34)
	 * $query->filterByExpires(array('min' => 12)); // WHERE expires > 12
	 * </code>
	 *
	 * @param     mixed $expires The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByExpires($expires = null, $comparison = null)
	{
		if (is_array($expires)) {
			$useMinMax = false;
			if (isset($expires['min'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::EXPIRES, $expires['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expires['max'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::EXPIRES, $expires['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::EXPIRES, $expires, $comparison);
	}

	/**
	 * Filter the query on the protocole column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProtocole(1234); // WHERE protocole = 1234
	 * $query->filterByProtocole(array(12, 34)); // WHERE protocole IN (12, 34)
	 * $query->filterByProtocole(array('min' => 12)); // WHERE protocole > 12
	 * </code>
	 *
	 * @param     mixed $protocole The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByProtocole($protocole = null, $comparison = null)
	{
		if (is_array($protocole)) {
			$useMinMax = false;
			if (isset($protocole['min'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::PROTOCOLE, $protocole['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($protocole['max'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::PROTOCOLE, $protocole['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::PROTOCOLE, $protocole, $comparison);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $createdAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(SfoauthserverrequesttokenPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query by a related Sfoauthserverconsumer object
	 *
	 * @param     Sfoauthserverconsumer|PropelCollection $sfoauthserverconsumer The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterBySfoauthserverconsumer($sfoauthserverconsumer, $comparison = null)
	{
		if ($sfoauthserverconsumer instanceof Sfoauthserverconsumer) {
			return $this
				->addUsingAlias(SfoauthserverrequesttokenPeer::CONSUMER_ID, $sfoauthserverconsumer->getId(), $comparison);
		} elseif ($sfoauthserverconsumer instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(SfoauthserverrequesttokenPeer::CONSUMER_ID, $sfoauthserverconsumer->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterBySfoauthserverconsumer() only accepts arguments of type Sfoauthserverconsumer or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Sfoauthserverconsumer relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function joinSfoauthserverconsumer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Sfoauthserverconsumer');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Sfoauthserverconsumer');
		}

		return $this;
	}

	/**
	 * Use the Sfoauthserverconsumer relation Sfoauthserverconsumer object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SfoauthserverconsumerQuery A secondary query class using the current class as primary query
	 */
	public function useSfoauthserverconsumerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSfoauthserverconsumer($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Sfoauthserverconsumer', 'SfoauthserverconsumerQuery');
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser|PropelCollection $sfGuardUser The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		if ($sfGuardUser instanceof sfGuardUser) {
			return $this
				->addUsingAlias(SfoauthserverrequesttokenPeer::USER_ID, $sfGuardUser->getId(), $comparison);
		} elseif ($sfGuardUser instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(SfoauthserverrequesttokenPeer::USER_ID, $sfGuardUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterBysfGuardUser() only accepts arguments of type sfGuardUser or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function joinsfGuardUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUser');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfGuardUser');
		}

		return $this;
	}

	/**
	 * Use the sfGuardUser relation sfGuardUser object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinsfGuardUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUser', 'sfGuardUserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Sfoauthserverrequesttoken $sfoauthserverrequesttoken Object to remove from the list of results
	 *
	 * @return    SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function prune($sfoauthserverrequesttoken = null)
	{
		if ($sfoauthserverrequesttoken) {
			$this->addUsingAlias(SfoauthserverrequesttokenPeer::ID, $sfoauthserverrequesttoken->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	// timestampable behavior
	
	/**
	 * Filter by the latest updated
	 *
	 * @param      int $nbDays Maximum age of the latest update in days
	 *
	 * @return     SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function recentlyUpdated($nbDays = 7)
	{
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Filter by the latest created
	 *
	 * @param      int $nbDays Maximum age of in days
	 *
	 * @return     SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function recentlyCreated($nbDays = 7)
	{
		return $this->addUsingAlias(SfoauthserverrequesttokenPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Order by update date desc
	 *
	 * @return     SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function lastUpdatedFirst()
	{
		return $this->addDescendingOrderByColumn(SfoauthserverrequesttokenPeer::CREATED_AT);
	}
	
	/**
	 * Order by update date asc
	 *
	 * @return     SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function firstUpdatedFirst()
	{
		return $this->addAscendingOrderByColumn(SfoauthserverrequesttokenPeer::CREATED_AT);
	}
	
	/**
	 * Order by create date desc
	 *
	 * @return     SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function lastCreatedFirst()
	{
		return $this->addDescendingOrderByColumn(SfoauthserverrequesttokenPeer::CREATED_AT);
	}
	
	/**
	 * Order by create date asc
	 *
	 * @return     SfoauthserverrequesttokenQuery The current query, for fluid interface
	 */
	public function firstCreatedFirst()
	{
		return $this->addAscendingOrderByColumn(SfoauthserverrequesttokenPeer::CREATED_AT);
	}

} // BaseSfoauthserverrequesttokenQuery