<?php

/**
 * Sfoauthserveruserscope form base class.
 *
 * @method Sfoauthserveruserscope getObject() Returns the current form's model object
 *
 * @package	##PROJECT_NAME##
 * @subpackage form
 * @author	 ##AUTHOR_NAME##
 */
abstract class BaseSfoauthserveruserscopeForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
							   'user_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
							   'consumer_id' => new sfWidgetFormPropelChoice(array('model' => 'Sfoauthserverconsumer', 'add_empty' => false)),
							   'scope' => new sfWidgetFormInputText(),
							   'id' => new sfWidgetFormInputHidden(),
						  ));

		$this->setValidators(array(
								  'user_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
								  'consumer_id' => new sfValidatorPropelChoice(array('model' => 'Sfoauthserverconsumer', 'column' => 'id')),
								  'scope' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
								  'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
							 ));

		$this->widgetSchema->setNameFormat('sfoauthserveruserscope[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'Sfoauthserveruserscope';
	}


}
