<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginstudent extends Model
{
    protected $table = 'loginstudents';
    protected $fillable = ['name', 'email', 'password'];
}




