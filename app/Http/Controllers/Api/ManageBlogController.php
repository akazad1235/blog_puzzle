<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Image;

class ManageBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = BlogPost::orderBy('id', 'desc')->get();
       return response()->json(['data'=>$data, 'status'=>'success'], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file =$request->file('blog_image');
        global $newFleName;
        if ($request->hasFile('blog_image')) {
            $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(100, 999999999) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(200, 200)->save(public_path('frontend/uploads/blog/') . $fileName);
            $newFleName = $fileName;
        }
        $blog = new BlogPost();
        $blog->user_id = auth()->user()->id;
        $blog->title = $request->title;
        $blog->blog_image = $newFleName;
        $blog->multiple_blog_image ='null';
        $blog->description = $request->description;
        $blog->save();
        return response()->json(['scucess'=>'blog post has been success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request){
        $accessToken = $request->user()->token();
        $accessToken->revoke();
        return response(['message' => 'You have been successfully logged out.'], 200);
    }
}
