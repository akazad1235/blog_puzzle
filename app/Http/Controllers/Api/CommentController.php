<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function comment(Request $request, $id){
       $getPost = BlogPost::find($id);

        $data = $request->all();
        $rules = [
            'comment' => 'required',
        ];
        $customMessage = [
            'comment' => 'email does not exists',
        ];
        $validator = Validator::make($data, $rules, $customMessage);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

       Comment::create([
           'user_id' => auth()->user()->id,
           'blog_post_id' => $getPost->id,
           'comment' => $request->comment,
       ]);
        return response()->json(['message'=>'successfully added your comment'], 200);
    }
    public function reply(Request $request, $id){
       $getComment =Comment::find($id);
       Comment::create([
           'user_id'=>auth()->user()->id,
           'blog_post_id' => $getComment->blog_post_id,
           'parent_id' => $getComment->id,
           'comment' =>$request->reply
       ]);

    }
}
