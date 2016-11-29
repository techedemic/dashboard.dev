<?php

namespace Dashboard\Validation;

use Violin\Violin;
use Dashboard\User\User;

class Validator extends Violin
{
    public function __construct(User $user)
    {
        $this->user = $user;

        $this->addFieldMessages([
            'email' => [
                'uniqueEmail' => "That email is already in use"
            ],
            'username' => [
                'uniqueUsername' => "That username is already in use"                
            ]
        ]);
    }

    public function validate_uniqueEmail($value, $input, $args)
    {
        $user = $this->user->where('email',$value);

        return !(bool) $user->count();
    }

    public function validate_uniqueUsername($value, $input, $args)
    {
        $user = $this->user->where('username',$value);

        return !(bool) $user->count();
    }
}

 ?>
