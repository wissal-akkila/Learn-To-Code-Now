@extends('admin.admin-layout')
@section('title', 'Contacts List')

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
    <h2 class="text-center fw-bold text-info mt-5">Contacts List  <i class="fas fa-globe"></i></h2>

    <div class="container mt-5">
        <table class="table rounded-2 overflow-hidden table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($contact as $key => $contact)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->last_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->message }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>

@endsection
