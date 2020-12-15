<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    //Add a feature to a role
    protected $table='features';
    protected $primary_key='id';

    protected $feature_name;

    protected $fillable=['feature',];
  
}
