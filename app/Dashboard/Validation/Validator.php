<?php

namespace Dashboard\Validation;

use Violin\Violin;
use Dashboard\User\User;
use Dashboard\Helpers\Hash;

class Validator extends Violin
{

    protected $user;
    protected $hash;
    protected $auth;

    public function __construct(User $user, Hash $hash, $auth = null)
    {
        $this->user = $user;
        $this->hash = $hash;
        $this->auth = $auth;

        $this->addFieldMessages([
            'email' => [
                'uniqueEmail' => "That email is already in use"
            ],
            'username' => [
                'uniqueUsername' => "That username is already in use"
            ]
        ]);

        $this->addRuleMessages([
            'matchesCurrentPassword' => 'Does not match existing password'
        ]);
    }

    public function validate_uniqueEmail($value, $input, $args)
    {
        $user = $this->user->where('email',$value);

        if($this->auth && $this->auth->email === $value)
        {
            return true;
        }

        return !(bool) $user->count();
    }

    public function validate_uniqueUsername($value, $input, $args)
    {
        $user = $this->user->where('username',$value);

        return !(bool) $user->count();
    }

    public function validate_matchesCurrentPassword($value, $input, $args)
    {
        if ($this->auth && $this->hash->passwordCheck($value, $this->auth->password)){
            return true;
        }
        die('This auth ' . $value);
        return false;
    }
}

 ?>
