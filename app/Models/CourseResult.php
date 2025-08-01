<?php
namespace App\Models;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CourseResult extends Model
{
    protected $fillable = ['user_id', 'course_id', 'score', 'passed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
 
    
}
