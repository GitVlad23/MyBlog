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
        if(Auth::check())
        {
            $comments = Contact::where(function($query)
            {
                return $query->where('user_id', Auth::User()->user_id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

            return view('contact', compact('comments'));
        }

        return view('home');

        // $comments = new Contact();

        // return view('contact', ['comments' => $comments->all()]);
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

    public function contact_reply(Request $request, $commentId)
    {
        $this->validate($request, [
            "reply-{$commentId}" => 'required|max:1000'
        ]);



        $comment = Contact::notReply()->find($commentId);

        if( ! $comment ) 
        {
            redirect()->route('home');
        }



        $user = auth()->user();

        $reply = new Contact();
        $reply->name = $user->name;
        $reply->message = $request->input("reply-{$comment->id}");
        $reply->User()->associate( Auth::User() );

        $comment->replies()->save($reply);


        return redirect()->back();
    }
}