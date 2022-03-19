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

        /*$user = Contact::create([
            'name' => $valid['name'],
            'title' => $valid['title'],
            'message' => $valid['message']
        ]);*/

        /*$user = User::where(['name' => $valid['name']])->first();*/

        /*$user = new User();
        $user->contact(0);
        $name = $user->name;
        $user->save();*/

        /*$data = User::all();*/

        $comment = new Answer();
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

        $answer = new Answer();
        $answer->name = $user->name;
        $answer->message = $request->input('message');

        $answer->save();

        return redirect('contact');
    }
}
