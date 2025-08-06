<?php
namespace App\Http\Controllers;

use App\Models\LearningLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningLogController extends Controller
{
    public function store(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['seconds']) && Auth::check()) {
            LearningLog::create([
                'user_id' => Auth::id(),
                'seconds' => $data['seconds'],
            ]);
        }

        return response()->noContent();
    }
}
