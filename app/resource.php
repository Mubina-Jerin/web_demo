<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    //
     protected $table='resources';
     protected $primary_key='id';	
     protected $caption;
     protected $img;
     protected $customer_image_id;
     protected $provider_image_id;
     protected $plant_image_id;
     protected $soil_image_id;
     protected $pesticide_image_id;
     protected $seed_image_id;
     protected $material_image_id;
     protected $fillable=['caption','img'];
}
