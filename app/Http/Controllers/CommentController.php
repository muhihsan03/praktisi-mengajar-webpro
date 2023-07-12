<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if(Auth::check())
        {
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string'
            ]);

            if($validator->fails()){
                return redirect()->back()->with('message','Comment area is mandetory');
            }
            $post = Post::where('slug', $request->user_id)->where('status','0')->first();
            if($post)
            {
                Comment::create([
                    'post_id' => $post->body,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('message', 'Komen Berhasil');
            }
            else
            {
               return redirect()->back()->with('message', 'Tidak ditemukan komen apapun');
            }
        }
        else
        {
            return redirect('login')->with('message', 'Login First to comment!');
        }
    }

}
