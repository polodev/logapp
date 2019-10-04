<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = [
        'php', 'lifestyle', 'html', 'css', 'js', 'windows', 'ubuntu',

      ];
      foreach ($tags as $tag) {
        Tag::create([
          'title' => Str::slug($tag)
        ]);
      }
    }
}
