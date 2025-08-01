<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
   protected $fillable = ['title', 'course_id', 'description', 'time_limit', 'max_attempts'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function questions()
{
    return $this->hasMany(Question::class);
}
}
