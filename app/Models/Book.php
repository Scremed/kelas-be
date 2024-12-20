<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'price',
        'release',
        'cover',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
