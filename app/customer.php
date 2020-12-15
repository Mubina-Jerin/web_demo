<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model 
{
    //

    protected $table='customers';
    protected $primary_key='id';
    protected $user_id; 
    protected $first_name;
    protected $last_name;
    protected $address;
    protected $phone_number;
    protected $bloger_id;
    
    protected $fillable=['user_id','first_name',
    'last_name','address',
    'phone_number',
    'bloger_id'];
}
