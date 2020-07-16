<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'es_name', "en_name", "cat_name", 'es_description', "en_description", "cat_description", 'slug', 'price', 'primary_img'
    ];
}
