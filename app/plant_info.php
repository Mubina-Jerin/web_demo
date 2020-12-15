<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plant_info extends Model
{
    //
    protected $table='plant_infos';
    protected $primary_key='id';
    
    protected   $id;
    protected $plant_name;
    protected $plant_type;
    protected $preferred_season;
    protected $plant_info;
 
    protected $fillable=['plant_name','plant_type',
    'preferred_season','plant_info'];
}
