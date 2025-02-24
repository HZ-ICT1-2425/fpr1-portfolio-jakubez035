<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quarter extends Model
{
    protected $fillable = ['name']; // Easy to add data

    // A Quarter has many Courses
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
