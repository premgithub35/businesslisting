<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    // use Sortable;

	 protected $table = "orders";

    // protected $fillable = ['order_id','user_id','name','alt_contact','mombile','email','pnr','from','to','train','train_name','doj','dod','seat','station','station','station_name','store','items','payment','gateway','created_at','updated_at'];


    public function Store()
    {
        return $this->belongsTo('App\Models\Store','store');
        // ->select(array('id','name','mobile','email','min_order','order_before','station_distance','station','opening_time','closing_time','status','marking','backup_restro','irctc_status','email','security_deposit','review_count','address'));
    }

   public function Status()
      {
          return $this->belongsTo('App\Models\Orderstatus','status');
      }
  
    public function orderDetail() {
        return $this->hasMany( OrderDetail::class, 'order_id' );
    }
}

