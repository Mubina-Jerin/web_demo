<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cultivation extends Model
{
    //For Gettting deep knowledge of a plant
    
    protected $table='cultivations';
    protected $primary_key='id';
    
    protected $plant_id;
    protected $cutivation_id;
    protected $month_to_strat;
    protected $month_to_end;
    protected $preferred_soil;
    protected $humadity_needed;
    protected $steps_of_cultivation;

    protected $fillable=[
    'plant_id',
    'cultivation_id',
    'month_to_start',
    'month_to_end',
    'prefered_soil',
    'steps_of_cultivation',];
}
