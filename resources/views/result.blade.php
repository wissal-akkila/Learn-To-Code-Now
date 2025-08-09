@extends('layouts.app')

@section('title', 'Quiz Result')

@section('content')

<div class="container text-2xl text-center">

        @if(isset($score))
            @if($score >= 5)
                <div class="alert alert-success mt-3">
                    <i class="fas fa-trophy text-warning"></i><i class="fas fa-birthday-cake text-success"></i>	 Congratulations! You passed the quiz.
                </div>
            @else
                <div class="alert alert-danger mt-3">
                  <i class="fas fa-heart-broken text-danger "></i>	  <i class="fas fa-frown text-warning"></i> Unfortunately, you did not pass. Try again!
                </div>
            @endif
        @endif

            </div>


    <div class="container py-5 text-center">
       <h2 class="fw-bold text-info"> <i class="fas fa-graduation-cap"></i> Your Quiz Result</h2>
        <p class="mt-5">Score: {{ $score ?? '' }} / {{ $total ?? '10' }}</p>
        <a href="{{ route('dashboard') }}" class="btn  btn-outline-info ">Back to dashboard</a>
    </div>
@endsection