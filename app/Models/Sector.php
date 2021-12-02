<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;


    protected $fillable = ['category_id','icon','gallery','slug-url','content','sort_order','url'];


}
