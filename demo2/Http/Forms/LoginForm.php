<?php

namespace Http\Forms;


use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    public $attributes;
    protected $errors = [];
//    public $attributes = [];

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        if (!Validator:: email($this->attributes['email'])) {
            $this->errors['email'] = 'Please enter a valid email address';
        }

        if (!Validator:: string($this->attributes['password'],1,15)) {
            $this->errors['password'] = 'Please provide a valid password';
        }
    }

    public static function validate($attributes)
    {
        $instance  = new static($attributes);
        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
        return $this;
    }
}