<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'items';//    
    protected $fillable = ['nome', 'valor', 'quantidade'];
    public $timestamps = false;
  
}
