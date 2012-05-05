<?php


/**
 * Base class that represents a query for the 'sfoauthservernonce' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.4 on:
 *
 * Sat May  5 15:24:28 2012
 *
 * @method     SfoauthservernonceQuery orderByNonce($order = Criteria::ASC) Order by the nonce column
 * @method     SfoauthservernonceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SfoauthservernonceQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     SfoauthservernonceQuery groupByNonce() Group by the nonce column
 * @method     SfoauthservernonceQuery groupById() Group by the id column
 * @method     SfoauthservernonceQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     SfoauthservernonceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SfoauthservernonceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SfoauthservernonceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Sfoauthservernonce findOne(PropelPDO $con = null) Return the first Sfoauthservernonce matching the query
 * @method     Sfoauthservernonce findOneOrCreate(PropelPDO $con = null) Return the first Sfoauthservernonce matching the query, or a new Sfoauthservernonce object populated from the query conditions when no match is found
 *
 * @method     Sfoauthservernonce findOneByNonce(string $nonce) Return the first Sfoauthservernonce filtered by the nonce column
 * @method     Sfoauthservernonce findOneById(int $id) Return the first Sfoauthservernonce filtered by the id column
 * @method     Sfoauthservernonce findOneByCreatedAt(string $created_at) Return the first Sfoauthservernonce filtered by the created_at column
 *
 * @method     array findByNonce(string $nonce) Return Sfoauthservernonce objects filtered by the nonce column
 * @method     array findById(int $id) Return Sfoauthservernonce objects filtered by the id column
 * @method     array findByCreatedAt(string $created_at) Return Sfoauthservernonce objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.sfOauthPropelServerPlugin.lib.model.om
 */
abstract class BaseSfoauthservernonceQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseSfoauthservernonceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Sfoauthservernonce', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SfoauthservernonceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SfoauthservernonceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SfoauthservernonceQuery) {
			return $criteria;
		}
		$query = new SfoauthservernonceQuery();
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
	 * @return    Sfoauthservernonce|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = SfoauthservernoncePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(SfoauthservernoncePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Sfoauthservernonce A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT NONCE, ID, CREATED_AT FROM sfoauthservernonce WHERE ID = :p0';
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
			$obj = new Sfoauthservernonce();
			$obj->hydrate($row);
			SfoauthservernoncePeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Sfoauthservernonce|array|mixed the result, formatted by the current formatter
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
	 * @return    SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SfoauthservernoncePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SfoauthservernoncePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the nonce column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNonce('fooValue');   // WHERE nonce = 'fooValue'
	 * $query->filterByNonce('%fooValue%'); // WHERE nonce LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nonce The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function filterByNonce($nonce = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nonce)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nonce)) {
				$nonce = str_replace('*', '%', $nonce);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SfoauthservernoncePeer::NONCE, $nonce, $comparison);
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
	 * @return    SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SfoauthservernoncePeer::ID, $id, $comparison);
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
	 * @return    SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(SfoauthservernoncePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(SfoauthservernoncePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SfoauthservernoncePeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Sfoauthservernonce $sfoauthservernonce Object to remove from the list of results
	 *
	 * @return    SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function prune($sfoauthservernonce = null)
	{
		if ($sfoauthservernonce) {
			$this->addUsingAlias(SfoauthservernoncePeer::ID, $sfoauthservernonce->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	// timestampable behavior
	
	/**
	 * Filter by the latest updated
	 *
	 * @param      int $nbDays Maximum age of the latest update in days
	 *
	 * @return     SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function recentlyUpdated($nbDays = 7)
	{
		return $this->addUsingAlias(SfoauthservernoncePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Filter by the latest created
	 *
	 * @param      int $nbDays Maximum age of in days
	 *
	 * @return     SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function recentlyCreated($nbDays = 7)
	{
		return $this->addUsingAlias(SfoauthservernoncePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Order by update date desc
	 *
	 * @return     SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function lastUpdatedFirst()
	{
		return $this->addDescendingOrderByColumn(SfoauthservernoncePeer::CREATED_AT);
	}
	
	/**
	 * Order by update date asc
	 *
	 * @return     SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function firstUpdatedFirst()
	{
		return $this->addAscendingOrderByColumn(SfoauthservernoncePeer::CREATED_AT);
	}
	
	/**
	 * Order by create date desc
	 *
	 * @return     SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function lastCreatedFirst()
	{
		return $this->addDescendingOrderByColumn(SfoauthservernoncePeer::CREATED_AT);
	}
	
	/**
	 * Order by create date asc
	 *
	 * @return     SfoauthservernonceQuery The current query, for fluid interface
	 */
	public function firstCreatedFirst()
	{
		return $this->addAscendingOrderByColumn(SfoauthservernoncePeer::CREATED_AT);
	}

} // BaseSfoauthservernonceQuery