@extends('layouts.app')

@section('title', 'Quiz Result')

@section('content')

    <div class="container py-5 text-center">
       <h2 class="fw-bold text-info"> <i class="fas fa-graduation-cap"></i> Your Quiz Result</h2>
        <p>Score: {{ $score ?? '' }} / {{ $total ?? '10' }}</p>
        <a href="{{ route('dashboard') }}" class="btn  btn-outline-info ">Back to dashboard</a>
    </div>
@endsection