<?php

/**
 * Sfoauthserverdeveloper form base class.
 *
 * @method Sfoauthserverdeveloper getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseSfoauthserverdeveloperForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'consumer_id' => new sfWidgetFormPropelChoice(array('model' => 'Sfoauthserverconsumer', 'add_empty' => false)),
      'user_id'     => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'admin'       => new sfWidgetFormInputCheckbox(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'consumer_id' => new sfValidatorPropelChoice(array('model' => 'Sfoauthserverconsumer', 'column' => 'id')),
      'user_id'     => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'admin'       => new sfValidatorBoolean(array('required' => false)),
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sfoauthserverdeveloper[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sfoauthserverdeveloper';
  }


}
