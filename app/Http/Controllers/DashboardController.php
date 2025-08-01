<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $inProgressCourses = Course::where('status', 'in_progress')->get();
        // $completedCourses  = Course::where('status', 'completed')->get();

        return view('dashboard', compact('inProgressCourses'));
    }

    public function status()
    {
        $userId = Auth::id();

// عدد الكورسات المكتملة
        $completedCoursesCount = DB::table('completed_courses')
            ->where('user_id', $userId)
            ->count();

// عدد الكورسات الجارية من جدول course_user
        $ongoingCoursesCount = DB::table('course_user')
            ->where('user_id', $userId)
            ->count();

// العدد الكلي للكورسات
        $totalCoursesCount = Course::count();

// النسب المئوية
        $completedPercentage = $totalCoursesCount > 0
        ? round(($completedCoursesCount / $totalCoursesCount) * 100, 2)
        : 0;

        $ongoingPercentage = $totalCoursesCount > 0
        ? round(($ongoingCoursesCount / $totalCoursesCount) * 100, 2)
        : 0;

        $user = auth()->user();

        $completedCourseIds = DB::table('completed_courses')
            ->where('user_id', $user->id)
            ->pluck('course_id')
            ->toArray();

        $courses_ingoing = $user->courses()->whereNotIn('courses.id', $completedCourseIds)->get();

        return view('dashboard', compact(
            'completedCoursesCount',
            'completedPercentage',
            'ongoingCoursesCount',
            'ongoingPercentage',
            'totalCoursesCount',
            'courses_ingoing'
        ));

    }

}
