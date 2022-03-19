<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $comment->name = $user->name;
        $comment->title = $request->input('title');
        $comment->message = $request->input('message');

        $comment->save();

        return redirect('contact');
    }

    public function answer_process(Request $request)
    {
        $user = auth()->user();

        $valid = $request->validate([
            'message' => 'required|min:15|max:500'
        ]);

        $comment = new Contact();
        $answer = new Answer();
        $comment->comment_id = uniqid();
        $answer->user_id = Contact::all('user_id');
        $answer->name = $user->name;
        $answer->message = $request->input('message');

        $answer->save();

        return redirect('contact');
    }
}
