<?php

namespace App\Taskman;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = ['name', 'description'];

  public function tasks() {
    return $this->hasMany(Task::class);
  }
}
