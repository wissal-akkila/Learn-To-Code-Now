<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Quiz;

class AdminController extends Controller
{
    public function controlPanel()
    {
       
        $courses = Course::all();
        $quizzes = Quiz::all();

        return view('admin.control-panel', compact('courses','quizzes'));
    }

      public function contactList()
    {
       
        $contact = Contact::all();
 
        return view('admin.contact-list', compact('contact'));
    }




    


}
