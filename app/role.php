<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $table='roles';
    protected $primary_key='id';
    protected $role_name;
    protected $feature_id;
    protected $fillable=['role_name','feature_id'];
}
