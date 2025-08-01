<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model


{
      protected $fillable = ['course_id', 'title', 'content',  'example','example_description'];

   

public function course()
{
    return $this->belongsTo(Course::class);

    
}
public function reorderLessons($courseId)
{
    $lessons = Lesson::where('course_id', $courseId)->orderBy('created_at')->get();

    $order = 1;
    foreach ($lessons as $lesson) {
        $lesson->order = $order++;
        $lesson->save();
    }

    return redirect()->back()->with('success', 'تم إعادة ترتيب الدروس بنجاح');
}
public function usersCompleted()
{
    return $this->belongsToMany(User::class, 'completed_lessons')->withTimestamps();
}

}

