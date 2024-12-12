<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function store(Request $request, Chirp $chirp)
    {
        if (!Auth::check()) {
            return back()->with('error', 'You must be logged in to comment');
        }

        $validated = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $chirp->comments()->create([
            'content' => $validated['content'],
            'user_id' => Auth::user()->id,

        ]);

        return back()->with('success', 'Comment added successfully');
    }


}






