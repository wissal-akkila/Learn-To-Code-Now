@extends('admin.admin-layout')
@section('title', 'Ask AI')

@section('content')

    <div class="container text-center mt-5">
        <div class="container text-center">
            <h2 class="mb-4 fw-bold text-info"> <i class="bi bi-robot"></i> Ask AI</h2>
        </div>


        <div class="bg-white p-4 d-flex flex-column justify-content-between rounded-3"
            style="height: 500px ; overflow-y: scroll ">

            <div class="ai-response">
        <div class="response"></div>

                <div id="response" class="mt-4 text-start"></div>
            </div>

            <div class="flex align-items-center gap-2 w-100">
                <input type="text" id="userInput" class="form-control " placeholder="Ask AI..." />
                <button onclick="askAI()" class="btn btn-outline-info">Send</button>
            </div>
        </div>

    </div>


@endsection
