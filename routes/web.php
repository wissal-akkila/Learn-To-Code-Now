<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditPanelController;
use App\Http\Controllers\SubscriberController;


// الصفحة الرئيسية
Route::get('/', fn() => view('start'));

Route::get('/home', fn() => view('home'))->name('home');

// صفحة بعد تسجيل الدخول

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// تسجيل الدخول (تنفيذ POST)
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// تسجيل الخروج
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// عرض نموذج التسجيل
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

// تنفيذ التسجيل
Route::post('/register', [RegisteredUserController::class, 'store']);
// عرض صفحة ال tutorials
Route::view('/tutorials', 'tutorials')->name('tutorials');
// عرض صفحة ال coding tips
Route::view('/coding-tips', 'coding-tips')->name('coding-tips');
// عرض صفحة الكونتاكت
Route::view('/contact-us', 'contact-us')->name('contact-us');
// عرض صفحة الاباوت
Route::view('/about-us', 'about-us')->name('about-us');
// عرض صفحات سياسة الخصوصية وشروط الاستخدام
Route::view('/privacy-policy', 'privacy-policy')->name('privacy.policy');
Route::view('/terms-of-service', 'terms-of-service')->name('terms.service');


// ارسال رسالة عبر الكونتاكت وسبسكرايب
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
// صفحات مطلوب لها الحماية بتسجيل الدخول
Route::middleware('auth')->group(function () {



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // صفحة اضافة درس
    Route::view('/add-lesson', [LessonController::class, 'showCourses'])->name('add.lesson');
   


// عرض صفحة الاتصالات
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// كورسات عامة
    Route::get('/add-lesson', [CourseController::class, 'showCourses'])->name('add-new-lesson');

  


    Route::get('/ai', [AuthController::class, 'aipage'])->name('ai.page');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'status'])->name('dashboard');
 
    Route::get('/admin/control-panel', [AdminController::class, 'controlPanel'])->name('control-panel');
    Route::get('/admin/contact-list', [AdminController::class, 'contactList'])->name('contact-list');

    Route::get('/admin/edits-panel', [EditPanelController::class, 'index'])->name('admin.edits-panel');
   Route::get('/admin/courses/edit', [CourseController::class, 'editCourses'])->name('courses.edit');
//Route::Post('/admin/courses/update', [CourseController::class, 'update'])->name('courses.update');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');


 Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');

Route::put('/lessons/{id}', [LessonController::class, 'update_id'])->name('lessons.update');
Route::get('/lessons/{id}', [LessonController::class, 'show_id'])->where('id', expression: '[0-9]+');
Route::get('/lessons/{slug}', [LessonController::class, 'showCourseLessons'])->name('lessons.show');

 

Route::get('/api/courses/{course}/lessons', [LessonController::class, 'getLessonsByCourse']);


// تعديل الكويزات
Route::get('/quizzes/{id}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::delete('/quizzes/{id}/delete', [QuizController::class, 'destroy'])->name('quizzes.destroy');

Route::put('/quizzes/{id}', [QuizController::class, 'update'])->name('quizzes.update');



Route::get('/quizzes/{quiz}/questions', [QuizController::class, 'questions']);


    // إعدادات المستخدم
    Route::get('/settings/show', [UserController::class, 'show'])->name('settings.show');
    Route::get('/settings/edit', [UserController::class, 'edit'])->name('settings.edit');
    Route::put('/settings', [UserController::class, 'update'])->name('settings.update');

    // إضافة كورسات ودروس

    ;
    Route::post('/admin/courses', [CourseController::class, 'store'])->name('courses.admin.store');
    Route::post('/admin/lessons', [LessonController::class, 'store'])->name('lessons.store');

// كويزات
    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
    Route::get('/quizzes/{quizId}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/questions/store', [QuestionController::class, 'store'])->name('questions.store');

    Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

    Route::post('/select-course', function (\Illuminate\Http\Request $request) {
        $request->session()->put('selected_course', $request->input('course_name'));
        return redirect()->back();
    })->name('select.course');

    Route::middleware(['auth'])->group(function () {
        Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
    });

    Route::get('/lessons/create', [LessonController::class, 'create'])->name('add-lesson');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');

    Route::post('/dashboard', [CourseController::class, 'inRoll'])->name('in.roll');

    Route::post('/lessons/complete', [LessonController::class, 'complete'])->name('lessons.complete');

    Route::get('/ask-ai', function () {
        return view('ask-ai'); 
    })->name('ask-ai.page');

    Route::get('/test-view', function () {
        return view('ask-ai');
    });


// حفظ الاشتراك

// عرض الاشتراكات - للأدمن فقط
Route::get('/admin/subscribers', [SubscriberController::class, 'index'])->name('subscribers');

Route::get('/questions/{id}', [QuestionController::class, 'show']);
Route::put('/questions/{id}', [QuestionController::class, 'update']);
Route::delete('/questions/{id}', [QuestionController::class, 'destroy']);



});
