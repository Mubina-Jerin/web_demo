<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    //For Accessing the database
    protected $table='logins';
    protected $primary_key='id';
    protected $loginID;
    protected $password;
    protected $user_id;

    protected $fillable=[
    'loginID','password','user_id',
    ];
}
