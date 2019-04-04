<?php

namespace App\Taskman;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = ['title', 'project'];
}
