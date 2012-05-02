<?php

/**
 * Sfoauthserveruserscope filter form base class.
 *
 * @package	##PROJECT_NAME##
 * @subpackage filter
 * @author	 ##AUTHOR_NAME##
 */
abstract class BaseSfoauthserveruserscopeFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
							   'user_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
							   'consumer_id' => new sfWidgetFormPropelChoice(array('model' => 'Sfoauthserverconsumer', 'add_empty' => true)),
							   'scope' => new sfWidgetFormFilterInput(),
						  ));

		$this->setValidators(array(
								  'user_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
								  'consumer_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Sfoauthserverconsumer', 'column' => 'id')),
								  'scope' => new sfValidatorPass(array('required' => false)),
							 ));

		$this->widgetSchema->setNameFormat('sfoauthserveruserscope_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'Sfoauthserveruserscope';
	}

	public function getFields()
	{
		return array(
			'user_id' => 'ForeignKey',
			'consumer_id' => 'ForeignKey',
			'scope' => 'Text',
			'id' => 'Number',
		);
	}
}
