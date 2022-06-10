<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    # One to Many Relationship
    public function cars(){
        return $this->hasMany(Car::class);
    }
    # Many to One
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
    # One to Many
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
