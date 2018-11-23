<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    
    protected $fillable = [
        'name', 'email', 'password', 'bio', 'type', 'photo', 'notes', 'education', 'location', 'skills', 'job',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
