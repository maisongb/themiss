<?php namespace TheMiss\Service\Form\ForgotPassword;

use TheMiss\Service\Validation\AbstractLaravelValidator;

class ForgotPasswordFormLaravelValidator extends AbstractLaravelValidator
{

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array(
        'email' => 'required|min:4|max:32|email',
    );

    /**
     * Custom Validation Messages
     *
     * @var Array
     */
    protected $messages = array( //'email.required' => 'An email address is required.'
    );
}