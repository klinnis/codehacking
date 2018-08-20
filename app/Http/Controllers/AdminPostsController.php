<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsCreateRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostsController extends Controller
{




    public function index()
    {

        $posts= Post::all();

        return view('admin.posts.index',compact('posts'));
    }





    public function create()
    {
        return view('admin.posts.create');
    }





    public function store(PostsCreateRequest $request)
    {
        $input= $request->all();
        $user= Auth::user();

        if($file= $request->file('photo_id')){

            $name= time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo= Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;

        }

        $user->posts()->create($input);

        return redirect('/admin/posts');


    }







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
}
