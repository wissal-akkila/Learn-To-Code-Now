<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @method \Illuminate\Database\Eloquent\Relations\BelongsToMany courses()
 */

class CourseController extends Controller
{
    // انشاء كورس جديد
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $slug         = Str::slug($request->title);
        $originalSlug = $slug;
        $counter      = 1;


        while (Course::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        Course::create([
            'title'       => $request->title,
            'description' => $request->description,
            'slug'        => $slug,
        ]);

        return redirect()->route('control-panel')->with('success', 'Course added successfully!');

    }
// ------------------------------------------------------------
// اضافة الكورس الى قائمة ال كومبليتد
    public function inRoll(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $user     = Auth::user();
        $courseId = $request->course_id;

        if (! $user) {
            return redirect()->back()->with('error', 'You must be logged in to add courses.');
        }

        // التحقق إذا كان الكورس منتهي بالفعل
        $alreadyCompleted = DB::table('completed_courses')
            ->where('user_id', $user->id)
            ->where('course_id', $courseId)
            ->exists();

        if ($alreadyCompleted) {
            return redirect()->back()->with('error', 'You have already completed this course.');
        }

        // التحقق إذا لم يكن الكورس مضافًا مسبقًا
   if (! $user->courses->contains($courseId)) {
    $user->courses()->attach($courseId);
    return redirect()->back()->with('success', 'Course added to your courses.');
} else {
    return redirect()->back()->with('error', 'The course has already been added.');
}
    }
    public function tutorials()
    {
        $courses = Course::all();
        return view('new-tutorials', compact('courses'));
    }
    public function showLessons()
    {
        $courses = Course::all();

        $lessons = Lesson::all(); 
        return view('lessons', compact('lessons', 'courses'));
    }
    public function showaddlesson()
    {
        $addlessons = Course::all(); 
        return view('add-lesson', compact('addlessons'));
    }

    public function showCourses()
    {
        $courses = Course::all();
        return view('add-lesson', compact('courses'));
    }
    public function editCourses()
    {
        $courses = Course::all();
        return view('admin.edits-panel', compact('courses'));
    }
    public function update(Request $request, $id)
    {

       
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

      
        $course = Course::findOrFail($id);

       
        $course->title       = $request->title;
        $course->description = $request->description;
        $course->save();

 
     
        return redirect()->to('/admin/edits-panel')->with('success', 'Updated successfully!');

    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully!');
    }


}
