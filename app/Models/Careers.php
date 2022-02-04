<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
	 protected $table = "careers";

     protected $fillable = ['title','content','is_active'];
    
}

