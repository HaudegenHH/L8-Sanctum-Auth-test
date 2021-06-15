<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // you cant add/fill in any fields unless you specify that in the model
    protected $fillable = ['name','slug','description','price'];  
}
