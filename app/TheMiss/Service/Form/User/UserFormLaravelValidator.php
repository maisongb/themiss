<?php namespace TheMiss\Service\Form\User;

use TheMiss\Service\Validation\AbstractLaravelValidator;

class UserFormLaravelValidator extends AbstractLaravelValidator
{

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array(
        'firstName' => 'alpha',
        'lastName' => 'alpha',
    );

    /**
     * Custom Validation Messages
     *
     * @var Array
     */
    protected $messages = array( //'email.required' => 'An email address is required.'
    );
}