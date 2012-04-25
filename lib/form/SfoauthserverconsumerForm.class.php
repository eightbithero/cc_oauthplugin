<?php

/**
 * Sfoauthserverconsumer form.
 *
 * @package    videopin
 * @subpackage form
 * @author     Your name here
 */
class SfoauthserverconsumerForm extends BaseSfoauthserverconsumerForm
{
  /**
   * @see sfForm
   */
  public function setup()
  {
    parent::setup();

    unset($this['created_at'], $this['updated_at'], $this['consumer_key'], $this['consumer_secret']);
    $this->setWidget('protocole', new sfWidgetFormSelect(array('choices' => array(1 => 'oauth 1.0', 2 => 'oauth 2.0'))));


    $this->validatorSchema['protocole'] = new sfValidatorChoice(array('choices' => array(1, 2)));
  }
}
