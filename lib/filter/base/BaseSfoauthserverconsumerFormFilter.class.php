<?php

/**
 * Sfoauthserverconsumer filter form base class.
 *
 * @package	##PROJECT_NAME##
 * @subpackage filter
 * @author	 ##AUTHOR_NAME##
 */
abstract class BaseSfoauthserverconsumerFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
							   'consumer_key' => new sfWidgetFormFilterInput(array('with_empty' => false)),
							   'consumer_secret' => new sfWidgetFormFilterInput(array('with_empty' => false)),
							   'name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
							   'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
							   'protocole' => new sfWidgetFormFilterInput(),
							   'base_domain' => new sfWidgetFormFilterInput(),
							   'callback' => new sfWidgetFormFilterInput(),
							   'scope' => new sfWidgetFormFilterInput(),
							   'number_query' => new sfWidgetFormFilterInput(),
							   'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
							   'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
						  ));

		$this->setValidators(array(
								  'consumer_key' => new sfValidatorPass(array('required' => false)),
								  'consumer_secret' => new sfValidatorPass(array('required' => false)),
								  'name' => new sfValidatorPass(array('required' => false)),
								  'description' => new sfValidatorPass(array('required' => false)),
								  'protocole' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
								  'base_domain' => new sfValidatorPass(array('required' => false)),
								  'callback' => new sfValidatorPass(array('required' => false)),
								  'scope' => new sfValidatorPass(array('required' => false)),
								  'number_query' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
								  'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
								  'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
							 ));

		$this->widgetSchema->setNameFormat('sfoauthserverconsumer_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'Sfoauthserverconsumer';
	}

	public function getFields()
	{
		return array(
			'consumer_key' => 'Text',
			'consumer_secret' => 'Text',
			'name' => 'Text',
			'description' => 'Text',
			'protocole' => 'Number',
			'base_domain' => 'Text',
			'callback' => 'Text',
			'scope' => 'Text',
			'number_query' => 'Number',
			'id' => 'Number',
			'created_at' => 'Date',
			'updated_at' => 'Date',
		);
	}
}
