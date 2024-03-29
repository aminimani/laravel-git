<?php

namespace App\Http\Controllers;

use App\Events\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Post::with('user')->get();
       return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
/*     $this->validate($request,[
         'title'=>'bail|required|min:2',
         'description'=>'required'
     ],[
         'title.required'=>'لطفا عنوان مطلب خود را انتخاب کنید',
         'title.min'=>'تعداد کارکتر های عنوان شما باید بیش از 2 باشد',
         'description.required'=>'لطفا توضیحات مطلب را انتخاب کینید'
     ]);*/
     $post = new Post();
     if ($file = $request->file('file')){
//         $name = $file->getClientOriginalName();
         $file->store('public/images');
//         $post-> path = $name;
     }
     $post->title = $request->title;
     $post->content = $request->description;
     $post->user_id = 1;
     $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        event(new PostViewEvent($post));
        return view('posts.show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $user = Auth::user();
//        if ($user->can('update',$post)){
            return view('posts.edit',compact(['post']));
//        }else{
//            return "اجازه دسترسی به ویرایش این مطلب را ندارید";
//        }


       /* if (Gate::denies('edit-post',$post)){
            return "اجازه دسترسی ویرایش این مطلب را ندارید";
        }else{

            return view('posts.edit',compact(['post']));
        }*/

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
        $post = Post::findORFail($id);
        $post->title = $request->title;
        $post->content = $request->description;
        $post->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::findOrfail($id);
        $post->delete();

        return redirect('posts');
    }
}
