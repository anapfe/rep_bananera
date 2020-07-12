<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = ['es_name', "en_name", "cat_name"];

  public function projects() {
    return $this->belongsToMany('\App\Project', 'project_tag', 'tag_id', 'project_id');
  }
}
