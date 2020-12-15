<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseryInventoryModel extends Model
{
    //

    protected $table='nursery_inventories';
    protected $primary_key='id';

    protected $id;
    protected $nursery_id;
    protected $inv_name;
    protected $inv_type;
    protected $created_at;
    protected $updated_at;

    protected $fillable=['inv_name','inv_type',];
}
