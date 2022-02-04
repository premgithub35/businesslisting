<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = "testimonials";
    protected $fillable = [ 'name','details','itemtype','location','rating','contact','is_active','img_url'];

    public function subcategories()
    {
        return $this->hasMany('App\Itemtype','name');
    }
}
