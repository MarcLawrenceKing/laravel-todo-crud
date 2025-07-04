<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // these are the properties of a todo
    protected $fillable = [
        'title',
        'description',
        'img_url',
        'is_done'
    ];
}
