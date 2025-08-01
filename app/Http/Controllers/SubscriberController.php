<?php
namespace App\Http\Controllers; // ✅ هذا هو السطر المفقود

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    // حفظ الاشتراك
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create([
            'email' => $request->email,
        ]);

        return back()->with('success', 'Thanks for subscribing!');
    }

    // عرض الاشتراكات للأدمن
    public function index()
    {
        $subscribers = Subscriber::latest()->get();
        return view('admin.subscribers', compact('subscribers'));
    }
}
