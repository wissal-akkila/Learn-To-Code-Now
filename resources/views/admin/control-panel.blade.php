<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>{{ $title ?? 'control Panel' }}</title>
         <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->     @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        body {
            background-color: #0A192F;
            color: #ccc;
        }

        .form-control::placeholder,
        .form-select option {
            color: #ccc !important;
        }

        footer {
            border-top: 1px solid #444;
            margin-top: 3rem;
            padding: 1rem 0;
            text-align: center;
            color: #777;
        }
         .nav-link .active {
        background-color:#0dcaf0;
        color: white;
    }
    </style>
 
</head>

<body>

    <!-- الهيدر -->
    <div class="container">
        <header class="text-center py-4 mb-4 border-bottom border-secondary d-flex justify-content-between">
        <h2  class="fw-bold text-info">Control Panel <i class="bi bi-speedometer2"></i></h2>

        
               <x-dropdown align="right" width="60">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-4 py-2 border text-sm leading-4 font-medium rounded-lg text-white transition ease-in-out duration-150"
                            style="background-color:#0A192F; border-color:#0A192F; width: 180px; justify-content: space-between;"
                            onmouseover="this.style.backgroundColor='#0dcaf0'"
                            onmouseout="this.style.backgroundColor='#0A192F'">>

                            <span>{{ Auth::user()->name }}</span>

                            <img width="30px" height="30px" class="rounded-circle"
                                src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/user.jpg') }}">
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div style="background-color:#0A192F; border-radius: 8px;">

                            @if (Auth::user()->role == 'admin')
                                <x-dropdown-link :href="route('control-panel')" class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Control Panel') }}
                                </x-dropdown-link>
                                 <x-dropdown-link :href="route('contact-list')" class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Contacts List') }}
                                </x-dropdown-link>
                            @else
                                <x-dropdown-link :href="route('dashboard')" class="text-white hover:bg-gray-700 text-decoration-none">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                            @endif

                            <x-dropdown-link :href="route('settings.show')" class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('Settings') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('ai.page')" class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('AI') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('admin.edits-panel')" class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('Edits Panel') }}
                            </x-dropdown-link>
                             <x-dropdown-link :href="route('subscribers')" class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('subscribers') }}
                            </x-dropdown-link>
                                 <x-dropdown-link :href="route('home')" class="text-white hover:bg-gray-700 text-decoration-none">
                                {{ __('Home') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" class="text-white hover:bg-gray-700 text-decoration-none"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>


    </header>
    </div>
    

    <div class="container">

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif
    </div>
 
    <!-- المحتوى الرئيسي -->
    <main class="container py-3">

        <ul class="nav nav-tabs mb-4" id="adminTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link tap active" id="course-tab" data-bs-toggle="tab" data-bs-target="#course"
                    type="button" role="tab">Add Course</button>
            </li>
            <li class="nav-item">
                <button class="nav-link tap text-info" id="lesson-tab" data-bs-toggle="tab" data-bs-target="#lesson" type="button"
                    role="tab">Add Lesson</button>
            </li>
            <li class="nav-item">
                <button class="nav-link tap text-info" id="quiz-tab" data-bs-toggle="tab" data-bs-target="#quiz" type="button"
                    role="tab">Add Quiz</button>
            </li>
            <li class="nav-item">
                <button class="nav-link tap text-info" id="question-tab" data-bs-toggle="tab" data-bs-target="#question" type="button"
                    role="tab">Add Question</button>
            </li>
        </ul>

        <div class="tab-content" id="adminTabsContent">

            <!-- Add Course -->
            <div class="tab-pane fade show active" id="course" role="tabpanel" aria-labelledby="course-tab">
                <form method="POST" action="{{ route('courses.store') }}">
                    @csrf
                    <h4>Add Course</h4>
                    <div class="mb-3">
                        <label class="form-label">Course Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            placeholder="Enter course title" required>
                        @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Description</label>
                        <textarea name="description" class="form-control" rows="3"
                            placeholder="Enter course description" required>{{ old('description') }}</textarea>
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-info">Save Course</button>
                </form>
            </div>

            <!-- Add Lesson -->
            <div class="tab-pane fade" id="lesson" role="tabpanel" aria-labelledby="lesson-tab">
                <form method="POST" action="{{ route('lessons.store') }}">
                    @csrf
                    <h4>Add Lesson</h4>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <select name="course_id" class="form-select" required>
                            <option value="" disabled selected>Select Course</option>
                            @foreach($courses ?? [] as $course)
                                <option value="{{ $course->id }}" @selected(
        old('course_id') == $course->id
    )>{{ $course->title }}
        </option>
                            @endforeach
                        </select>
                        @error('course_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lesson Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            placeholder="Enter lesson title" required>
                        @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lesson Content</label>
                        <textarea name="content" class="form-control" rows="4" placeholder="Enter content"
                            required>{{ old('content') }}</textarea>
                        @error('content') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lesson example</label>
                        <textarea name="example" class="form-control" rows="4" placeholder="Enter example"
                            required>{{ old('example') }}</textarea>
                        @error('example') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">example_description</label>
                        <textarea name="example_description" class="form-control" rows="4" placeholder="Enter example_description"
                            required>{{ old('example_description') }}</textarea>
                        @error('example_description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-success">Save Lesson</button>
                </form>
            </div>

            <!-- Add Quiz -->
            <div class="tab-pane fade" id="quiz" role="tabpanel" aria-labelledby="quiz-tab">
                <form method="POST" action="{{ route('quizzes.store') }}">
                    @csrf
                    <h4>Add Quiz</h4>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <select name="course_id" class="form-select" required>
                            <option value="" disabled selected>Select Course</option>
                            @foreach($courses ?? [] as $course)
                                <option value="{{ $course->id }}" @selected(
        old('course_id') == $course->
            id
    )>{{ $course->title }}</option>
                            @endforeach
                        </select>
                        @error('course_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quiz Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            placeholder="Enter quiz title" required>
                        @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time Limit (minutes)</label>
                        <input type="number" name="time_limit" value="{{ old('time_limit') }}" class="form-control"
                            placeholder="e.g. 30" required>
                        @error('time_limit') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Max Attempts</label>
                        <input type="number" name="max_attempts" value="{{ old('max_attempts') }}" class="form-control"
                            placeholder="e.g. 3" required>
                        @error('max_attempts') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Save Quiz</button>
                </form>
            </div>

            <!-- Add Question -->
            <div class="tab-pane fade" id="question" role="tabpanel" aria-labelledby="question-tab">
                <form method="POST" action="{{ route('questions.store') }}">
                    @csrf
                    <h4>Add Question</h4>
                    <div class="mb-3">
                        <label class="form-label">Quiz</label>
                        <select name="quiz_id" class="form-select" required>
                            <option value="" disabled selected>Select Quiz</option>
                            @foreach($quizzes ?? [] as $quiz)
                                <option value="{{ $quiz->id }}" @selected(old('quiz_id') == $quiz->id)>{{ $quiz->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('quiz_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Question Text</label>
                        <input type="text" name="question_text" value="{{ old('question_text') }}" class="form-control"
                            placeholder="Enter the question" required>
                        @error('question_text') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Option A</label>
                        <input type="text" name="option_a" value="{{ old('option_a') }}" class="form-control" required>
                        @error('option_a') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Option B</label>
                        <input type="text" name="option_b" value="{{ old('option_b') }}" class="form-control" required>
                        @error('option_b') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Option C</label>
                        <input type="text" name="option_c" value="{{ old('option_c') }}" class="form-control" required>
                        @error('option_c') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Option D</label>
                        <input type="text" name="option_d" value="{{ old('option_d') }}" class="form-control" required>
                        @error('option_d') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correct Option</label>
                        <select name="correct_option" class="form-select" required>
                            <option value="" disabled selected>Select correct option</option>
                            <option value="A" @selected(old('correct_option') == 'A')>A</option>
                            <option value="B" @selected(old('correct_option') == 'B')>B</option>
                            <option value="C" @selected(old('correct_option') == 'C')>C</option>
                            <option value="D" @selected(old('correct_option') == 'D')>D</option>
                        </select>
                        @error('correct_option') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Save Question</button>
                </form>
            </div>

        </div>
    </main>


    <footer>
        <p>&copy; {{ date('Y') }} Learn To Code Now. All rights reserved.</p>
    </footer>

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>


</body>

</html>