@extends('admin.admin-layout') {{-- عدل هذا حسب تخطيطك --}}

@section('content')
    <div class="container">
        <h2 class="text-center fw-bold text-info mt-5">Subscribers List  <i class="fas fa-bell"></i></h2>
        <table class="table rounded-2 overflow-hidden table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Subscribed At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribers as $subscriber)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subscriber->email }}</td>
                        <td>{{ $subscriber->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection