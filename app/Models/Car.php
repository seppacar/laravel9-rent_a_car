<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    #Many to One relationship
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
