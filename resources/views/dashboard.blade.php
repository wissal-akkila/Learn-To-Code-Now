 @extends('admin.admin-layout')
 @section('title', 'Dashboard')

 @section('content')

     <!-- My Courses -->
     <div class="container">
         @if (session('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         @endif
     </div>
     <div class="dashbord container rounded-4 mt-5 pt-4 border">

         <div class="row">
             <div class="col-12">
                 <h3 class="fw-bold text-center">My Courses <span><i class="bi bi-bookmark-fill"></i></span></h3>

                 <ul id="myCoursesList" class="list-unstyled">
                  
                     @foreach ($courses_ingoing as $course)
                         <li class="d-flex justify-content-between align-items-center pt-3">
                             <p>{{ $course->title }}</p>
                             <a href="{{ route('lessons.show', $course->title) }}"
                                 class="btn-dashbord btn-sm btn btn-outline-info btn-outline-custom">Continue</a>
                         </li>
                     @endforeach
                 </ul>

                 <div class="text-end p-3">
                     <a href="/add-lesson" class="btn-dashbord btn-sm btn btn-outline-info">
                         Add Lesson <span><i class="bi bi-plus fa-lg"></i></span>
                     </a>

                 </div>
             </div>
         </div>
     </div>

     <!-- Completed Courses -->
     <div class="dashbord container rounded-4 mt-5 pt-4 border">
         <div class="row">
             <div class="col-12">
                 <h3 class="fw-bold text-center">My Completed Courses <i class="bi bi-clipboard-check-fill"></i></h3>

                 @foreach (auth()->user()->completedCourses as $course)
                     <li class="d-flex justify-content-between align-items-center pt-3">
                         <p>{{ $course->title }}</p>
                         <a class="btn-dashbord btn-sm btn btn-outline-info btn-outline-custom">Completed </a>
                     </li>
                 @endforeach
             </div>
         </div>
     </div>

     <!-- Tests Passed -->
     <div class="dashbord container rounded-4 mt-5 pt-4 border" >
         <div class="row">
             <div class="col-12">
                 <h3 class="fw-bold text-center">The exams you have taken <span><i class="bi bi-trophy-fill"></i></span></h3>

                 <ul class="list-unstyled">
                     <li class=" pt-3 border-bottom border-3 pb-2">

                         <div class="d-flex border-bottom justify-content-between align-items-center ">
                             <p class="fw-bold text-info">Passed</p>
                             <span><i class="fa-solid fa-circle-check fa-2xl" style="color: green;"></i></span>
                         </div>

                         <ul>
                             @foreach (auth()->user()->courseResults->where('score', '>=', 5) as $result)
<li class="d-flex justify-content-between align-items-center border-0 pt-3">
                                     <p>{{ $result->course->title }}</p>
                                     <p>{{ $result->score }}/10</p>
                                 </li>
@endforeach
                         </ul>
                     </li>



                     <li class="pt-3 border-bottom pb-2">
                         <div class="d-flex justify-content-between align-items-center border-bottom ">
                             <p class="fw-bold text-info">Failed</p>
                             <span><i class="fa-solid fa-circle-exclamation fa-2xl" style="color:#cc3838;"></i></span>
                         </div>
                         <ul>
                             @foreach (auth()->user()->courseResults->where('score', '<', value: 5) as $result)
                                 <li class="d-flex justify-content-between align-items-center border-0 pt-3">
                                     <p>{{ $result->course->title }}</p>
                                                                        <p>{{ $result->score}}/10</p>

                                 </li>
                             @endforeach
                         </ul>

                     </li>
                 </ul>
             </div>
         </div>
     </div>

     <!-- Progress and Weekly Review -->
     <div class="container pb-5" >
         <div class="d-flex gap-3 mt-5">
             <div class="dashbord rounded-4 pt-4 border w-50">
                 <h4 class="fw-bold text-start ps-4 text-info">Monitoring your progress</h4>

                 <div class="container pt-4">
                     <div class="row">
                         <div class="col-4">
                             <p class="mb-0">Progress level:</p>

                         </div>
                         <div class="col-8 ">
                             <div class="progress flex-grow-1">
                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                     style="width:{{ $completedPercentage }}%;">
                                 {{ $completedPercentage }}%
                                 </div>
                             </div>
                         </div>
                     </div>



                 </div>
                 <div class="container pt-4">
                     <div class="row">
                         <div class="col-4">
                             <p class="mb-0">Ongoing:</p>

                         </div>
                         <div class="col-8">
                             <div class="progress flex-grow-1">
                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                     style="width:{{$ongoingPercentage}}%">
                                     {{$ongoingPercentage}} %
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="dashbord rounded-4 pt-4 border w-50">
                 <h4 class="fw-bold text-info text-start ps-4">Weekly progress review</h4>

                 <ul>
                     <li class="d-flex justify-content-between align-items-center pt-3">
                         <p> Number of learning hours for this week <span class="badge bg-info text-dark ms-5">{{ $learningHours }} hours</span></p>
                     </li>
                 <li class="d-flex  align-items-center pt-3">
    <p class="mb-0 me-3">Your evaluation</p>

    <div class="d-flex align-items-center">
        <span class="badge bg-{{ $badgeClass }}">{{ $learningLevel }}</span>

        @if ($badgeClass == 'success')
            <i class="fa-regular fa-circle-check fa-xl ms-1" style="color: green;"></i>
        @elseif ($badgeClass == 'warning')
            <i class="fa-solid fa-exclamation-triangle fa-xl ms-1" style="color: orange;"></i>
        @else
            <i class="fa-solid fa-circle-xmark fa-xl ms-1" style="color: red;"></i>
        @endif
    </div>
</li>
                  
                 </ul>
             </div>
         </div>
     </div>
<script>
 
</script>
 @endsection
