<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
// استدعاء الـ Str لتوليد slug

class Course extends Model
{
    protected $fillable = ['title', 'description', 'slug']; // أضف slug هنا

    protected static function booted()
    {
        static::creating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });

        static::updating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

 
public function usersCompleted()
{
    return $this->belongsToMany(User::class, 'completed_courses')
                ->withTimestamps()
                ->withPivot('completed_at');
}
}


