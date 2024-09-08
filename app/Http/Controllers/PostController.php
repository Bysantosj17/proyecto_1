<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        /*$posts = DB::table('posts')->get();*/

        $posts = Post::get();

        return view('posts.index', ['posts'=> $posts]);
    }

    public function show(Post $post)
    {
        /*return Post::findOrFail($post);*/
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => New Post]);
    }

    public function store(SavePostRequest $request)
    {

        Post::create($request->validated());
        // $validated = $request->validate([
        //     'title' => ['required', 'min:4'],
        //     'body' => ['required']
        // ]/*,[
        //     'title.required' => 'Error diferente :attribute'
        // ]*/);

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // Post::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);


        // session()->flash('status', 'Post creado');

        return to_route('posts.index')->with('status', 'Post creado!');
    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){

        // $validated = $request->validate([
        //     // 'title' => ['required', 'min:4'],
        //     // 'body' => ['required']
        // ]/*,[
        //     'title.required' => 'Error diferente :attribute'
        // ]*/);

        // $post = Post::find($post);
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // $post->update([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);

        $post->update($request->validated());

        session()->flash('status', 'Post se actualizo');

        return to_route('posts.show', $post)->with('status', 'Post creado!');
    }

    public function destroy(Post $post){
        $post->delete();

        return to_route('posts.index')->with('status', 'Post eliminado');
    }
}
