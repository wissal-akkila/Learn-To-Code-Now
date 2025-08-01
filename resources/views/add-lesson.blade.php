 @extends('admin.admin-layout')
 @section('title', 'Add Lesson')

 @section('content')


     <div class="container text-center" style="padding-top: 150px;">
         <h1 class="tet-light fw-bold">Our Courses</h1>
         <p class="tet-light">Welcome to the heart of Lemn To Code Now-where learning meets practice.
             Whether you're just starting out or auming to sharpen your shills, our carefully
             structured courses will guide you every step of the way.
             Our goal is to make programming simple, accessible, and practical</p>
  

     </div>

     <div class="container mt-4">
      
         @if (session('success'))
             <div class="alert alert-success text-center">
                 {{ session('success') }}
             </div>
         @endif

         @if (session('error'))
             <div class="alert alert-danger text-center">
                 {{ session('error') }}
             </div>
         @endif

     </div>
     <div id="demo" class="carousel slide" data-bs-ride="carousel" style="position: relative;">
         <div class="carousel-indicators">
             <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
             <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
             <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
             <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
             <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
         </div>

        

         <div id="courseCarousel" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                 @foreach ($courses->chunk(2) as $chunkIndex => $courseChunk)
                     <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                         <div class="container my-5">
                             <div class="row justify-content-center g-4">
                                 @foreach ($courseChunk as $course)
                                     <div class="col-md-6 col-lg-5 d-flex justify-content-center">
                                         <div class="card shadow rounded-lg" style="width: 100%; max-width: 400px;">
                                             <div class="position-relative">
                                                  
                                                <h1 class="text-center text-info fw-bold">{{ $course->title }}</h1>
                                               
                                             </div>

                                             <div class="card-body text-light rounded-bottom">
                                                 <p class="card-text text-center">{{ $course->description }}</p>
                                                 <div class="d-flex justify-content-center">
                                                     <form method="POST" action="{{ route('in.roll') }}">
                                                         @csrf
                                                         <input type="hidden" name="course_id"
                                                             value="{{ $course->id }}">
                                                         <button type="submit" class="btn btn-sm  btn-outline-info mt-5"
                                                             >
                                                             Add to My Courses
                                                         </button>
                                                     </form>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>

             <!-- أزرار التنقل بين الشرائح -->
             <button class="carousel-control-prev" type="button" data-bs-target="#courseCarousel" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon"></span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#courseCarousel" data-bs-slide="next">
                 <span class="carousel-control-next-icon"></span>
             </button>
         </div>


     </div>

 @endsection
