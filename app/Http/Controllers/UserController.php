<?php

namespace App\Http\Controllers;
          
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // عرض صفحة عرض بيانات المستخدم (Settings page)
    public function show()
    {
        $user = Auth::user();
        return view('settings', compact('user'));
    }

    // صفحة تعديل بيانات المستخدم
    public function edit()
    {
        $user = Auth::user();
        return view('settings-edit', compact('user'));
    }

    public function update(Request $request)
    {


        $user = Auth::user();

        
   

 
        $user->name = $request->name ;
        $user->phone      = $request->phone;




       
    if ($request->hasFile('profile_image')) {
   
    if ($user->profile_image) {
        Storage::disk('public')->delete($user->profile_image);
    }

    // رفع الصورة الجديدة وتخزين المسار
    $path = $request->file('profile_image')->store('profile_images', 'public');

    // حفظ المسار في قاعدة البيانات
    $user->profile_image = $path;
}




 
        $user->save();

        
        return redirect()->route('settings.show')->with('success', 'تم تحديث البيانات بنجاح.');
    }
}
