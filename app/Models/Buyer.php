<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function books() {
        return $this->belongsToMany(Book::class, 'book_buyer', 'buyer_id', 'book_id');
    }
}