<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    //
    protected $table='providers';

    protected $primary_key='id';
   
    protected $user_id;
    protected $first_name;
    protected $last_name;
    protected $address;
    protected $phone_number;
    protected $is_broker;
    protected $is_sourcer;
    protected $bloger_id;
    protected $fillable=['user_id','first_name','last_name',
    'address','phone_number','is_broker','is_sourcer','blogger_id'];

}
