<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $comments = new Contact();
        return view('contact', ['comments' => $comments->all()]);
    }

    public function contact_check(Request $request)
    {
        $user = auth()->user();

        $valid = $request->validate([
            'title' => 'required|min:4',
            'message' => 'required|min:15|max:500'
        ]);

        $comment = new Contact();
        $comment->name = $user->getAuthIdentifierName('name');
        $comment->title = $request->input('title');
        $comment->message = $request->input('message');

        $comment->save();

        return redirect()->route('contact');
    }

}
