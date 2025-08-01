
    
@extends('admin.admin-layout')
@section('title', 'Settings Edit')

@section('content')
   <div class="container mt-5">
        <div class="form-section">
            <h3 class="mb-4 text-center fw-bold">change settings</h3>
    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="container text-center pt-5">
            <img id="previewImage"
                src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/user.jpg') }} "  class="rounded-circle mb-3" style="width: 150px;" alt="Profile">
    
            <div class="d-flex justify-content-center align-items-center gap-2">
                <button type="button" class="btn btn-sm" onclick="document.getElementById('profileImage').click();">
                    Upload Image
                </button>
                <span id="fileName" class="text-light">No file chosen</span>
            </div>
    
            <input type="file" id="profileImage" name="profile_image" accept="image/*" style="display: none;">
        </div>
    
        <div class="mb-3 pt-5">
            <label for="name" class="label-settings rounded-top-2">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name ?? '') }}" required>
        </div>
    
        <div class="mb-3">
            <label for="email" class="label-settings rounded-top-2">Email address</label>
            <input type="email" class="form-control p-3" name="email" value="{{ $user->email }}" readonly>
        </div>
    
        <div class="mb-3">
            <label for="phone" class="label-settings rounded-top-2">Phone Number</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
        </div>
    
    
    
        <div class="mb-3">
            <label for="password" class="label-settings rounded-top-2"> Password</label>
            <input type="password" class="form-control" name="new_password" placeholder="New Password">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-outline-info">
                Save Changes
            </button>
        </div>
        
        </form>

    </div>
</div>


@endsection