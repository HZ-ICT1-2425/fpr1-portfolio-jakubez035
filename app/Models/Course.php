<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = ['name', 'quarter_id'];

    // A Course belongs to a Quarter
    public function quarter(): BelongsTo
    {
        return $this->belongsTo(Quarter::class);
    }

    // A Course has many Assessments
    public function assessments(): HasMany
    {
        return $this->hasMany(Assessment::class);
    }
}
