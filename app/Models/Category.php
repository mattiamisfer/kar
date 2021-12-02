<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','sort_order','sort_order','slug_url'];

    protected $table = 'categories';


    public function sectors() {
        return $this->hasMany(Sector::class);
    }
  

}
