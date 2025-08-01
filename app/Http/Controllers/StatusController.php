<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $completedCoursesCount = DB::table('completed_courses')
            ->where('user_id', $userId)
            ->count();

        $totalCoursesCount = Course::count();

        $percentage = $totalCoursesCount > 0
        ? round(($completedCoursesCount / $totalCoursesCount) * 100, 2)
        : 0;

return view('dashboard', compact('completedCoursesCount', 'totalCoursesCount', 'percentage'));
    }
}
