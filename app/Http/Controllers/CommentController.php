<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment([
            'user_id' => $request->input('user_id'),
            'comment' => $request->input('comment'),
            'commenter_id' => $request->input('commenter_id')
        ]);
        $comment->save();
        return redirect('/');
    }
        
}


