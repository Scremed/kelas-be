<?php

namespace App\Models;

use App\Models\Buyer;
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

    public function buyers() {
        return $this->belongsToMany(Buyer::class, 'book_buyer', 'book_id', 'buyer_id');
    }
}
