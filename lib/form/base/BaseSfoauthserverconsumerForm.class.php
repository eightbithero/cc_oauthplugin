<?php

/**
 * Sfoauthserverconsumer form base class.
 *
 * @method Sfoauthserverconsumer getObject() Returns the current form's model object
 *
 * @package	##PROJECT_NAME##
 * @subpackage form
 * @author	 ##AUTHOR_NAME##
 */
abstract class BaseSfoauthserverconsumerForm extends BaseFormPropel
{
	public function setup()
	{
		$this->setWidgets(array(
							   'consumer_key' => new sfWidgetFormInputText(),
							   'consumer_secret' => new sfWidgetFormInputText(),
							   'name' => new sfWidgetFormInputText(),
							   'description' => new sfWidgetFormTextarea(),
							   'protocole' => new sfWidgetFormInputText(),
							   'base_domain' => new sfWidgetFormInputText(),
							   'callback' => new sfWidgetFormInputText(),
							   'scope' => new sfWidgetFormInputText(),
							   'number_query' => new sfWidgetFormInputText(),
							   'id' => new sfWidgetFormInputHidden(),
							   'created_at' => new sfWidgetFormDateTime(),
							   'updated_at' => new sfWidgetFormDateTime(),
						  ));

		$this->setValidators(array(
								  'consumer_key' => new sfValidatorString(array('max_length' => 40)),
								  'consumer_secret' => new sfValidatorString(array('max_length' => 40)),
								  'name' => new sfValidatorString(array('max_length' => 256)),
								  'description' => new sfValidatorString(),
								  'protocole' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
								  'base_domain' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
								  'callback' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
								  'scope' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
								  'number_query' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
								  'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
								  'created_at' => new sfValidatorDateTime(array('required' => false)),
								  'updated_at' => new sfValidatorDateTime(array('required' => false)),
							 ));

		$this->widgetSchema->setNameFormat('sfoauthserverconsumer[%s]');

		$this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

		parent::setup();
	}

	public function getModelName()
	{
		return 'Sfoauthserverconsumer';
	}


}
