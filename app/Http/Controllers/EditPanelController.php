<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Quiz;

class EditPanelController extends Controller
{
     public function index()
     {
        $quizzes = Quiz::all();
$courses = Course::all();


        return view('admin.edits-panel')->with('quizzes', $quizzes)->with('course', $courses)->with('course2', $courses);
     }
 }
