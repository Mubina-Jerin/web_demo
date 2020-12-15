<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //For controlling a order itenery
    protected $table='items';
    protected $primary_key='id';
    protected $order_id;
    protected $item_name;
    protected $resource_id;
    protected $unit_cost;
    protected $num_of_units;
    protected $material_id;
    protected $fillable=['order_id',
    'item_name','resource_id','unit_cost',
    'num_of_units','material_id',];


}
