<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
  use HasFactory;

  protected $fillable = [
    'full_name',
    'email',
    'project_title',
    'phone',
    'description',
    'budget',
    'has_response'
  ];
}
