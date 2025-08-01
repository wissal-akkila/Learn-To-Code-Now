<?php
namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create($quizId)
    {
       $quiz = Quiz::findOrFail($quizId);
return view('questions.create', compact('quiz', 'quizId'));

    }
 
public function store(Request $request)
{
    var_dump($request->all());
 
    $request->validate([
        'quiz_id' => 'exists:quizzes,id',
        'question_text'  => 'string',
        'option_a' => 'string',
        'option_b' => 'string',
        'option_c' => 'string',
        'option_d' => 'string',
        'correct_option' => 'in:A,B,C,D',
    ]);

    

    Question::create([
        'quiz_id' => $request->quiz_id,
        'question_text' => $request->question_text,
        'option_a' => $request->option_a,
        'option_b' => $request->option_b,
        'option_c' => $request->option_c,
        'option_d' => $request->option_d,
        'correct_option' => $request->correct_option,
    ]);


    return redirect()->back()->with('success', 'Question added successfully.');
}


public function show($id)
{
    $question = Question::find($id);
    return response()->json($question);
}

public function update(Request $request, $id)
{
    $question = Question::findOrFail($id);

    $request->validate([
        'question_text' => 'required',
        'option_a' => 'required',
        'option_b' => 'required',
        'option_c' => 'required',
        'option_d' => 'required',
        'correct_option' => 'required|in:a,b,c,d',
    ]);

    $question->update($request->all());

    return response()->json(['message' => 'Updated successfully']);
}

public function destroy($id)
{
    Question::destroy($id);
    return response()->json(['message' => 'Deleted successfully']);
}

}
