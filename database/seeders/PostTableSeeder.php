<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(8)->create(['author_id' => 1]);
        Post::factory()->count(8)->create(['author_id' => 2]);
        Post::factory()->count(8)->create(['author_id' => 3]);
        Post::factory()->count(8)->create(['author_id' => 4]);
        Post::factory()->count(2)->create(['author_id' => 5]);
    }
}
