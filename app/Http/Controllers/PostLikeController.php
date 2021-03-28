<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    
    public function store(Post $post, Request $request){

        if ($post->likeBy($request->user())){
            return response(null, 419);
        }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        // if(!$post->likes()->onlyTrashed()->where('user_id', $request->user()->id)->count()){
        //     Mail::to($post->user)->send(new PostLiked(auth()->user, $post));
        // }

        return back();
    }

    public function destroy(Post $post, Request $request){
        $request->user()->likes()->where('post_id', $post->id)->delete();
        
        return back();
    }
     
}
