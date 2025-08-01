@extends('layouts.app')
@section('title', 'lessons')

@section('content')
    <div class="container text-center">
        <h1 class="text-light fw-bold">{{ $course->title }}</h1>
        <p class="text-light">{{ $course->description }}</p>
       
    </div>



    <div class="container text-light pt-5">
            @if (session('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <div class="row">
        
            <div class="col-md-4">
                <h5 class="fw-bold text-info" >Lessons</h5>
                <ul class="list-group lesson-list" data-user="@auth{{ Auth::user()->id }}@else{{ rand(1000, 9999) }}@endauth"
  data-lesson-id="lesson-{{$course->id }}">
                    @foreach ($lessons as $lesson)
                        <li data-index="{{ $loop->index }}" class="lesson  {{ $loop->first ? 'active-lesson active' : '' }} text-light list-group-item border-0 border-bottom" data-bs-toggle="pill"
                            data-bs-target="#lesson-{{ $lesson->id }}">
                            {{ $lesson->title }}
                        </li>
                    @endforeach
                </ul>
            </div>

           
            <div class="col-md-8">
                <div class="tab-content">
                    @foreach ($lessons as $lesson)
                        <div class="tab-pane fade pt-4 {{ $loop->first ? 'show active' : '' }}"
                            id="lesson-{{ $lesson->id }}">
                            <h5 class="fw-bold text-info" >{{ $lesson->title }}</h5>
                            <p>{!! nl2br(e($lesson->content)) !!}</p>

                            @if ($lesson->example)
                                <h6 class=" mt-4 fw-bold">Example:</h6>
                                <div
                                    class="text-start text-light p-3 rounded "style="box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.3);">
                                    <code>{{ $lesson->example }}</code>
                                </div>
                            @endif

                            @if ($lesson->example_description)
                                <p class="text-light mt-4 fw-bold">Example Description:<p>
                                <div
                                    class="text-light text-start  p-3 rounded  "style="box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.3);">
                                    {{ $lesson->example_description }}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center pt-5 d-none lesson-complete ">
   
        <h5 class="fw-bold text-info">You have completed the lesson . Add To Your Completed Course </h5>
        <form method="POST" action="{{ route('lessons.complete', $lesson->id) }}">
            @csrf
            <button type="submit" class="btn  btn-outline-info">
                 <i class="fas fa-check me-2"></i> Done</button>
            <input type="hidden" name="lesson_id" value="{{ $course->id }}">
        </form>
    </div>


    <hr class="my-4" style="border-top: 2px solid white;">
    <div class="container">
        <h3 class="text-center text-light pt-5">
            You have a test for this course. Do you want to submit it to pass the course?
        </h3>

        <div class="container d-flex justify-content-center mb-3">
            <button id="showQuizBtn" class="btn  btn-outline-info"style="width: 120px; height: 40px;">Try it</button>
        </div>

        <!-- قسم الاختبار المخفي -->
        <div id="quizSection" class="  shadow p-4 text-light" style="display: none;">
            @if (isset($slug) && $slug->quizzes->first())
                <h4>{{ $slug->quizzes->first()->title }}</h4>
                <p>{{ $slug->quizzes->first()->description }}</p>
            @else
                <p>No quiz available for this course.</p>
            @endif

            @if (isset($quiz))
                <form action="{{ route('quizzes.submit', $quiz->id) }}" method="POST">
                    @csrf

                    @foreach ($quiz->questions as $index => $question)
                        <div class="mb-4">
                            <h5>Q{{ $index + 1 }}. {{ $question->question_text }}</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                    value="A" required>
                                <label class="form-check-label">{{ $question->option_a }}</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                    value="B">
                                <label class="form-check-label">{{ $question->option_b }}</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                    value="C">
                                <label class="form-check-label">{{ $question->option_c }}</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                    value="D">
                                <label class="form-check-label">{{ $question->option_d }}</label>
                            </div>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-success btn-outline-info">Submit Quiz</button>
                </form>
            @else
            @endif
        </div>
    </div>

    <script>
        document.getElementById('showQuizBtn').addEventListener('click', function() {
            document.getElementById('quizSection').style.display = 'block';
            this.style.display = 'none'; 
//عرض واخفاء زر عرض الاختبار
        });

        function markCourseCompleted(courseTitle) {
            localStorage.setItem('completedCourse', courseTitle);
            alert('Course marked as completed!');
           
            window.location.href = "/dashboard"; 
        }
    </script>
@endsection



<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.lesson-list').forEach(ul => {
        const lessonId = ul.dataset.lessonId;
        const userId = ul.dataset.user;
        const totalItems = ul.querySelectorAll('li').length;

        // استرجع البيانات من localStorage
        let clickedItems = JSON.parse(localStorage.getItem(`lesson_${lessonId}_userId_${userId}`)) || [];

        // تحقق من العناصر التي تم الضغط عليها مسبقًا
        clickedItems.forEach(index => {
            const li = ul.querySelector(`li[data-index="${index}"]`);
            if (li) li.classList.add('visited');
        });

        checkCompletion();

        // عند الضغط على عنصر
        ul.querySelectorAll('li').forEach(li => {
            li.addEventListener('click', function () {
  
                const index = li.dataset.index;
                if (!clickedItems.includes(index)) {
     
                    clickedItems.push(index);
                    localStorage.setItem(`lesson_${lessonId}_userId_${userId}`, JSON.stringify(clickedItems));
                    li.classList.add('visited');
                }
                checkCompletion();
            });
        });

        // تحقق من الاكتمال
        function checkCompletion() {
            if (clickedItems.length === totalItems-1) {

                document.querySelector('.lesson-complete').classList.remove('d-none');
            }
        }
    });
});
</script>
