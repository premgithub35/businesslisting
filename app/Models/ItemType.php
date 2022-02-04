<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    protected $table="itemtypes";

    protected $fillable = ['name','content','is_active'];

    public function categories()
{
    return $this->belongsTo('App\Testimonials','id');
}
}
