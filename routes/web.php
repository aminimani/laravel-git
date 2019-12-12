<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
http://cms.test/
Route::get('/', function () {
  return view('welcome');
});

/*
Route::get('admin',function (){
    return 'صفحه مدیریت';
});
Route::get('post/{id}/{name}',function ($id,$name){
   return 'id:'."".$id." ".$name;
});
Route::get('post/{id}/{name?}',function ($id,$name= null){
    return 'id:'." ".$id." ".$name;
});
Route::prefix('users')->group(function (){
    Route::get('post/first',function (){
        return 'پست اول';
    });
    Route::get('post/second',function (){
        return 'پست دوم';
    });
});*/
//Route::get('/contact','PostsController@contact');
//Route::get('/show-myview/{id}/{name}/{password}','PostsController@showMyview');
//Route::get('/select','PostsController@select');

//Route::get('/insert','PostsController@insert');
//route::get('/update','PostsController@updatePost');
//Route::get('/delete-post','PostsController@deletePost');
//Route::get('/posts','PostsController@getAllPosts');
//Route::get('/save-post','PostsController@savePost');
//Route::get('/update-post','PostsController@newUpdatePost');

//Route::get('posts','postsController@getAllPosts');
//Route::get('save-posts','postsController@savePost');
//Route::get('update-posts','postsController@newUpdatePost');
//Route::get('delete-posts','postsController@newDeletePost');
//Route::get('data-trash','postsController@workWithTrash');
//Route::get('restore-post','postsController@restorePost');
//Route::get('force-delete-post','postsController@forceDelete');

//Elouquent relationship

// one to one relationship
//Route::get('user/{id}/posts',function ($id){
// $user_post = \App\User::find($id)->post;
// return $user_post;
//});
//Route::get('post/{id}/user',function ($id){
//    $post_user = \App\post::find($id)->user;
//    return $post_user;
//});

//one to many relationship
//Route::get('user/{id}/posts',function ($id){
//   $users_posts = \App\User::find($id)->posts;
//   foreach ($users_posts as $posts){
//       echo $posts->title;
//       echo "<br>";
//   }
//});
//
////many to many relationship
//Route::get('user/{id}/roles',function ($id){
//   $role = \App\Role::find($id);
//   foreach ($role->users as $users){
//       echo $users->name;
//       echo "<br>";
//   }
//});
//Route::get('user/pivot',function (){
//    $user = App\user::find(1);
//    foreach ($user->roles as $role){
//        return $role->pivot->created_at;
//    }
//});

//Route::get('user/photos',function (){
//   $user = \App\User::find(1);
//   foreach ($user->photos as $photo){
//       echo $photo->path;
//       echo "<br>";
//   }
//});
//
//Route::get('post/photos',function (){
//    $post = \App\Post::find(9);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//        echo "<br>";
//    }
//});
//Route::get('photo/{id}/post',function ($id){
//    $photo = \App\Photo::find($id);
//    return $photo->imageable;
//});
//
//Route::get('post/tags',function (){
//    $post = \App\Post::find(9);
//    foreach ($post->tags as $tag){
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('video/tags',function (){
//    $video = \App\Video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('tag/{id}/post',function($id){
//    $tag = App\Tag::find($id);
//    foreach ($tag->videos as $video){
//        echo $video->name;
//        echo "<br>";
//    }
//});
//Route::get('/create',function(){
//   $user = App\User::find(1);
//   $post = new App\Post;
//   $user->posts()->title="سلام دنیا";
//   $post->content = 'content for crude operation';
//   $user->posts()->save($post);
//});
//Route::get('/read',function (){
//   $user = App\User::find(1);
//   foreach ($user->posts as $post){
//       echo $post->title;
//       echo "<br>";
//   }
//});
//Route::get('/update',function(){
//   $user = App\User::find(1);
//   $user->posts()->whereId(9)->update(['title'=>'updated with crude']);
//});

//Route::get('create',function (){
//    $user = App\User::find(1);
//    $role = new App\Role;
//    $role->name = "مدیر";
//    $user->roles()->save($role);
//});
//Route::get('read',function (){
//   $user = App\User::find(1);
//   foreach ($user->roles as $role){
//       echo $role->name;
//       echo "<br>";
//   }
//});
//Route::get('update',function (){
//    $user = App\User::find(1);
//    if ($user->has('roles')){
//        foreach ($user->roles as $role){
//            if ($role->name = 'نویسنده'){
//                $role->name = 'author';
//                $role->save();
//            }
//
//        }
//    }
//});

//Route::get('update',function (){
//    $video = App\Video::find(1);
//    $tag = $video->tags;
//    $newtags = $tag->where('id',1)->first();
//    $newtags->name="laravel_tag";
//    $newtags->save();
//});
//Route::get('delete',function (){
//   $video = App\Video::find(1);
//   $tag = $video->tags;
//   $deletetag =$tag->where('id',1)->first();
//   $deletetag->delete();
//
//});
//Route::get('synch',function (){
//   $video=App\Video::find(1);
//   $video->tags()->synch(2);
//});

//Route::resource('/posts','PostsController');




//
//Route::get('/',function (){
//        $user = Auth::user();
//        return $user;
//});
//Route::get('/home','HomeController@index')->middleware(['auth','verified'])->name('home');
//Route::get('/admin',function (){
//        echo "hello to admin page";
//})->middleware('isAdmin:نویسنده');
//Route::get('/',function (){
//    $user = Auth::user();
//    $id = Auth::id();
//   if (Auth::check()){
//       echo "hello ".$user->name;
//       echo "<br>";
//       echo $id;
//   }else{
//      return redirect('/home');
//   }
//    $user = Auth::loginUsingId(3);
//    dd($user);
//
//});
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::middleware(['auth','verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/posts','PostsController');
});

Route::get('/admin',function(){
   echo "Hello to Admin Page";
})->middleware('isAdmin:نویسنده');

//Route::get('/session',function (\Illuminate\Http\Request $request){
//    return $request->session()->all();
//});
