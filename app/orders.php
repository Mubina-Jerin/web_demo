<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    protected $table='orders';
    protected $primary_key='id';

    protected $id;
    protected $sender_id;
    protected $recipent_id;
    protected $tracking_id;
    protected $order_summary;
    protected $total_amount;
    protected $order_status;
    protected $created_at;
    protected $updated_at;

    protected $fillable=['sender_id','recipient_id','tracking_id'
    ,'order_sumary','total_amount',];
    
}

