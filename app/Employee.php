<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['firstname', 'lastname', 'birthday', 'email', 'phone', 'address', 'hiredate', 'job', 'bio', 'photo', 'salary'];
}
