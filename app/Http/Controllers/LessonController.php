<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'course_id'           => 'required|exists:courses,id',
            'title'               => 'required|string|max:255',
            'content'             => 'required|string',
            'example'             => 'nullable|string',
            'example_description' => 'nullable|string',
        ]);

        Lesson::create($request->only('course_id', 'title', 'content', 'example', 'example_description'));

        return redirect()->route('control-panel')->with('success', 'Lesson added successfully!');
    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }

    public function showCourseLessons($slug)
    {
        $course  = Course::where('slug', $slug)->firstOrFail();
        $lessons = $course->lessons()->orderBy('order')->get();
        $quiz    = $course->quizzes()->with('questions')->first();

        return view('lessons', compact('course', 'lessons', 'quiz'));
    }

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function showLessons($courseId)
    {
        $course = Course::findOrFail($courseId);
        return view('lessons.show', compact('course'));
    }
    public function complete(Request $request)
    {
        $user = auth()->user();

        $lesson_id = $request->lesson_id;


        if (! $user->completedCourses()->where('course_id', $lesson_id)->exists()) {
            $user->completedCourses()->attach($lesson_id);

            return redirect()->route('dashboard')->with('success', 'Lesson marked as completed!');

        } else {
            return redirect()->back()->with('info', 'already Lesson marked as completed!');

        }

    }

    public function getLessonsByCourse($courseId)
    {
        $lessons = \App\Models\Lesson::where('course_id', $courseId)->get();
        return response()->json($lessons);
    }
    public function destroy($id)
    {
        $lesson = \App\Models\Lesson::findOrFail($id);
        $lesson->delete();

        return response()->json(['message' => 'Lesson deleted successfully']);
    }

    public function update_id(Request $request, $id)
    {
        $lesson = Lesson::find($id);

        if (! $lesson) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }

       
        $validated = $request->validate([
            'title'               => 'required|string|max:255',
            'content'             => 'required|string',
            'example'             => 'nullable|string',
            'example_description' => 'nullable|string',
        ]);

        // التحديث
        $lesson->update($validated);

        return response()->json(['message' => 'Lesson updated successfully']);
    }

    public function show_id($id)
    {
        $lesson = Lesson::findOrFail($id);

        if (! $lesson) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }

        return response()->json($lesson);
    }

}
