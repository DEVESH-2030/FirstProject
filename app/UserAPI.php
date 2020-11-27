<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAPI extends Model
{
    protected $fillable = ['name', 'email', 'password'];
    
}
