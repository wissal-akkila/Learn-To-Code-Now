<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseResult;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // عرض نموذج إنشاء الكويز
 
public function create()
{
    $courses = Course::all(); // ✅ احضر كل الكورسات من قاعدة البيانات

    return view('lessons', compact('courses'));


    }

    // حفظ الكويز في قاعدة البيانات
    public function store(Request $request)
    {
        

        $validated = $request->validate([
         
    'course_id' => 'required|exists:courses,id',
    'title'     => 'required|string|max:255',


            'description'  => 'nullable|string',
            'time_limit'   => 'nullable|integer|min:1',
            'max_attempts' => 'nullable|integer|min:1',
        ]);

       Quiz::create($validated);


        return redirect()->back()->with('success', 'Quiz added successfully.');
    }

    // تقديم أجوبة الكويز وحساب النتيجة
    public function submit(Request $request, Quiz $quiz)
    {
        // if (! auth()->check()) {
        //     return redirect()->route('login')->with('error', 'Please login first to submit quiz.');
        // }

        $answers = $request->input('answers', []);

        $score          = 0;
        $totalQuestions = $quiz->questions()->count();

        if ($totalQuestions === 0) {
            return redirect()->back()->with('error', 'This quiz has no questions.');
        }

        foreach ($quiz->questions as $question) {
            if (isset($answers[$question->id]) && strtoupper($answers[$question->id]) === strtoupper($question->correct_option)) {
                $score++;
            }
        }

        $percentage = ($score / 10) ;
        $passed     = $percentage >= 5; 

        // حفظ النتيجة أو تحديثها في جدول course_results
        CourseResult::updateOrCreate(
            [
                'user_id'   => auth()->id(),
                'course_id' => $quiz->course_id,
            ],
            [
                'score'  => $score,
                'passed' => $passed,
            ]
        );

        return view('result', compact('score', 'totalQuestions', 'percentage', 'passed'));
    }
    public function index()
{
    $quizzes = Quiz::all();
   

    return view('quizzes.edits-panel', compact('quizzes'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'title'        => 'required|string|max:255',
        'description'  => 'nullable|string',
        'time_limit'   => 'nullable|integer',
        'max_attempts' => 'nullable|integer',
    ]);

    $quiz = Quiz::findOrFail($id);

    $quiz->update([
        'title'        => $request->title,
        'description'  => $request->description,
        'time_limit'   => $request->time_limit,
        'max_attempts' => $request->max_attempts,
    ]);

    return redirect()->back()->with('success', 'Quiz updated successfully!');
}
public function destroy($id)
{
    Quiz::destroy($id);
return redirect()->to('/admin/edits-panel')->with('success', 'Deleted successfully!');
}  
  

public function questions($quizId)
{
    $questions = Question::where('quiz_id', $quizId)->get();

    return response()->json($questions);
}



}
