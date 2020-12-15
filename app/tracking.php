<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracking extends Model
{
    //
    protected $table= 'trackings';
   protected $primary_key='id';	
   protected $sender_address;	
   protected $recipent_address;	
   protected $current_status;
   protected $fillable=['sender_address',
   'recipent_address'
    ,'current_status',];

}
