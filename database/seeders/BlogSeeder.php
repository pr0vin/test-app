<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $bog1 = Blog::create([
            'title' => 'this is my second blog post',
            'description' => 'this is my second blog post',
        ]);
    }
}
