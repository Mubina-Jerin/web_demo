<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nursery_catelog extends Model
{
    //For adding a plant in the nursery inventory
    protected $table='nursery_catelogs';
    protected $primary_key='id';
   

    protected $material_id;
    protected $nursery_id;
    protected $plant_id;

    protected $fillable=['nursery_id','material_id','plant_id',];

}
