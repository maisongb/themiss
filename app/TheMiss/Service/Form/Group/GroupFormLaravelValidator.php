<?php namespace TheMiss\Service\Form\Group;

use TheMiss\Service\Validation\AbstractLaravelValidator;

class GroupFormLaravelValidator extends AbstractLaravelValidator
{

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array(
        'name' => 'required|min:4'
    );

    /**
     * Custom Validation Messages
     *
     * @var Array
     */
    protected $messages = array( //'email.required' => 'An email address is required.'
    );
}