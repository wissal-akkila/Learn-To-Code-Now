@extends('layouts.app')

@section('title', 'Our Courses')

@section('content')
    <section class="container py-5">
        <h1 class="text-center mb-4">new course</h1>

        @if($courses->count() > 0)
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                            <form action="{{ route('new-tutorials') }}" method="POST">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <button type="submit" class="btn btn-primary">Add to My Course</button>
                            </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No courses available.</p>
        @endif
    </section>
@endsection