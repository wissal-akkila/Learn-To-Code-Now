 
 @extends('admin.admin-layout')
@section('title', 'AI')

@section('content')
    <div class="container text-center gap-3">
        <img src="{{ asset('images/ai.png') }}" class="img-fluid mx-auto d-block pt-5" style="width:300px;">

        <a class="btn text-decoration-none fw-bold btn-lg btn-outline-info mt-4 py-2" style="width:300px;"
   href="{{ route('ask-ai.page') }}">Ask AI</a>
    </div>

@endsection