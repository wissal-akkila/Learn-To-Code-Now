@extends('layouts.app')

@section('title', 'Quiz Result')

@section('content')
    <div class="container py-5 text-center">
        <i class="fas fa-graduation-cap"></i><h2>Your Quiz Result</h2>
        <p>Score: {{ $score ?? '' }} / {{ $total ?? '10' }}</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline-info ">Back to dashboard</a>
    </div>
@endsection