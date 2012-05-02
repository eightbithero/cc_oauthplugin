<?php

/**
 * Sfoauthserverdeveloper filter form base class.
 *
 * @package	##PROJECT_NAME##
 * @subpackage filter
 * @author	 ##AUTHOR_NAME##
 */
abstract class BaseSfoauthserverdeveloperFormFilter extends BaseFormFilterPropel
{
	public function setup()
	{
		$this->setWidgets(array(
							   'consumer_id' => new sfWidgetFormPropelChoice(array('model' => 'Sfoauthserverconsumer', 'add_empty' => true)),
							   'user_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
							   'admin' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
						  ));

		$this->setValidators(array(
								  'consumer_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Sfoauthserverconsumer', 'column' => 'id')),
								  'user_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
								  'admin' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
							 ));

		$this->widgetSchema->setNameFormat('sfoauthserverdeveloper_filters[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'Sfoauthserverdeveloper';
	}

	public function getFields()
	{
		return array(
			'consumer_id' => 'ForeignKey',
			'user_id' => 'ForeignKey',
			'admin' => 'Boolean',
			'id' => 'Number',
		);
	}
}
