<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email and body are required
			array('name, email, body', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'name' => Yii::t('models', 'Name'),
			'email' => Yii::t('models', 'E-Mail-Adresse'),
			'body' => Yii::t('models', 'Ihre Nachricht'),
			'verifyCode' => Yii::t('models', 'Sicherheits-Code'),
		);
	}
}
