<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'price' => '1234',
            'release' => '2025-02-24',
            'cover' => 'Book1.jpg',
            'category_id' => '1'
        ]);
    }
}
