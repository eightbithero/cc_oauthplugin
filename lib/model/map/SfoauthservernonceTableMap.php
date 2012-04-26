<?php



/**
 * This class defines the structure of the 'sfOauthServerNonce' table.
 *
 *
 * This class was autogenerated by Propel 1.6.4 on:
 *
 * Thu Apr 26 13:58:38 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.sfOauthPropelServerPlugin.lib.model.map
 */
class SfoauthservernonceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfOauthPropelServerPlugin.lib.model.map.SfoauthservernonceTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('sfOauthServerNonce');
		$this->setPhpName('Sfoauthservernonce');
		$this->setClassname('Sfoauthservernonce');
		$this->setPackage('plugins.sfOauthPropelServerPlugin.lib.model');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('sfOauthServerNonce_id_seq');
		// columns
		$this->addColumn('NONCE', 'Nonce', 'VARCHAR', true, 40, null);
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'false', 'filter' => 'false', ),
			'timestampable' => array('create_column' => 'created_at', 'update_column' => 'created_at', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // SfoauthservernonceTableMap