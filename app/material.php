<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    //For listing a source matrial in the inventtory
    protected $table='materials';
    protected $primary_key='id';
    
    protected $display_name;
    protected $owner_id; // foreign key:: provider_id
    
    protected $inv_id;//foreign: inventory table
    protected $unit_price;
    protected $display_info;
    protected $plant_id; // foreign : Plant_infos table
    protected $fillable=['display_name','owner_id','inv_id','unit_price',
        'display_info','plant_id'];
        
}
