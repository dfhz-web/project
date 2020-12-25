<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    protected $guarded = ['id'];
    use HasFactory;

     // Relacion uno a muchos a la inversas
     public function module()
     {
         return $this->belongsTo('App\Models\Module');
 
     }
}
