<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Student extends Model
{
    protected $fillable = ['name', 'student_id', 'email', 'document_path'];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
