<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $tags = [
      1 => ['branding', 'branding', 'branding'],
      2 => ['ilustración', 'illustration',
      'il.lustració'],
      3 => ['lettering', 'lettering', 'lettering'],
      4 => ['comunicación', 'communication',
      'comunicació'],
    ];

    foreach ($tags as $tag => $props) {
      $tag = \App\Tag::create([
        "es_name" => $props[0],
        "en_name" => $props[1],
        "cat_name" => $props[2],
      ]);
    }
  }
}
