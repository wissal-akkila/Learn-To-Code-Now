 @extends('admin.admin-layout')
 @section('title', 'Settings')

 @section('content')
     <div class="container settings-show mt-5">

         <h3 class="mb-4 text-center fw-bold text-white">Personal information</h3>

         <!-- صورة المستخدم -->
         <div class="container text-center pt-5">
             <!-- الصورة الشخصية -->
             <img id="profileImage"
                 src="{{ auth()->user()->profile_image ? asset('storage/' . auth()->user()->profile_image) : asset('images/user.jpg') }}"
                 class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Profile Image" />

        
             <h3 class="text-white">{{ auth()->user()->name }}</h3>

           
             <div class="mt-4 p-4 rounded-3 text-start text-white" style="max-width: 500px; margin: auto;">
                 <p><strong>Name :</strong> {{ auth()->user()->name }}</p>
                 <hr class="border-white" />
                 <p><strong>Phone Number :</strong> {{ auth()->user()->phone ?? '---' }}</p>
                 <hr class="border-white" />
                 <p><strong>Email Address :</strong> {{ auth()->user()->email }}</p>
                 <hr class="border-white" />
                 <p><strong>Password :</strong> *******</p>
             </div>

             <div class="d-grid">
                 <a href="{{ route('settings.edit') }}" class="btn btn-outline-info text-decoration-none btn-lg">Modify data</a>
             </div>
         </div>

     </div>

 @endsection
