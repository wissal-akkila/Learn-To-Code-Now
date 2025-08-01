<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // عرض نموذج صفحة التواصل
    public function show()
    {
        return view('contact');
    }

//    حفظ البيانات المرسلة
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:20',
            'message'    => 'required|string',
        ]);

        Contact::create($request->all());

       return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon.');

    }
}

