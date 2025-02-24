<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assessment extends Model
{
    protected $fillable = ['title', 'course_id', 'condition', 'points'];

    // An Assessment belongs to a Course
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
