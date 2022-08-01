<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for($i = 1; $i <= 100; $i++){
//            $post = new Post();
//            $post->title = "Post {$i}";
//            $post->description = "Description of {$i}";
//            $post->save();
//        }
        Post::factory(500)->create();
    }
}
