<?php

use App\Post;
use App\User;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $categories = [
//            ['title' => 'Features', 'slug' => 'features'],
//            ['title' => 'Food', 'slug' => 'food'],
//            ['title' => 'Travel', 'slug' => 'travel'],
//            ['title' => 'Recipe', 'slug' => 'recipe'],
//            ['title' => 'Bread', 'slug' => 'bread'],
//            ['title' => 'Breakfast', 'slug' => 'breakfast'],
//            ['title' => 'Meat', 'slug' => 'meat'],
//            ['title' => 'Fastfood', 'slug' => 'fastfood'],
//            ['title' => 'Salad', 'slug' => 'salad'],
//            ['title' => 'Soup', 'slug' => 'soup'],
//        ];
//
//        DB::table('categories')->insert($categories);
//
//       factory(App\User::class, 20)->create();
//       factory(App\Post::class, 50)->create();
//
//        $tags = [
//            ['name' => 'Creative', 'slug' => 'creative', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Unique', 'slug' => 'unique', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Template', 'slug' => 'template', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Photography', 'slug' => 'photography', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Travel', 'slug' => 'travel', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Lifestyle', 'slug' => 'lifestyle', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'WordPress Template', 'slug' => 'wordpress-template', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Food', 'slug' => 'food', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//            ['name' => 'Idea', 'slug' => 'idea', 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d') ],
//        ];
//
//        DB::table('tags')->insert($tags);

        //Create fake tags.

//        $posts = \App\Post::all();
//
//        foreach ($posts as $post){
//            $range = rand(3, 6);
//            $tags = \App\Tag::inRandomOrder()->limit($range)->get();
//            $posts_tags = [];
//
//            foreach ($tags as $tag){
//                $posts_tags[] = ['post_id' => $post->id, 'tag_id' => $tag->id, 'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d')];
//            }
//            DB::table('post_tag')->insert($posts_tags);
//    }

    }



}

