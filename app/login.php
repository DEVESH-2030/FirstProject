<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $fillable = ['name' , 'email', 'password'];
}
