<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Fields that can be updated via update()
     * @var array
     */
    protected $fillable = ['name', 'biography'];
}
