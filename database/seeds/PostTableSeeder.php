<?php

use App\Post;
use App\Tag;
use Faker\Factory;
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
      $faker = Factory::create();
      $types = ['log', 'tutorial', 'gist'];
      foreach ( range(1, 100) as $value) {
        $tag = Tag::get()->random();
        $type = $types[ array_rand( $types ) ];
        $title = $faker->realText(150);
        $content = "tag" . $tag->title . " type = $type " . $faker->realText( rand(300,  550));
        $post = Post::create([
          'title' => $title,
          'type' => $type,
          'user_id' => 1,
          'content_markdown' => $content,
        ]);
        $post->tags()->attach($tag);
      }
    }
}
