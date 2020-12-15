<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nursery extends Model
{
    //For Adding a firm to a user

    protected $table='nurseries';
    protected $primary_key='id';
    
    protected $nursery_name;
    protected $description;
    protected $user_id; // link to user table 

    protected $fillable=['nursery_name','description',
    'user_id',];


}
