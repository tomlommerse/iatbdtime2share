<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function block(User $user)
    {
        //verwijder producten en comments
        Product::where('owner_id', $user->id)->delete();
        Comment::where('commenter_id', $user->id)->delete();

        $user->update(['blocked' => true]);

        return redirect()->back();
    }

    public function unblock(User $user)
    {
        $user->update(['blocked' => false]);

        return redirect()->back();
    }
}
