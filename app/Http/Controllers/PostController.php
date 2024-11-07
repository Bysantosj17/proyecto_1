<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        /*$posts = DB::table('posts')->get();*/

        $posts = Post::paginate(25);

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        /*return Post::findOrFail($post);*/
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(Request $request)
    {
        $post = new Post();

        $request->validate([
            'tatoos' => 'required|image'
        ]);

        $tatoos = $request->file('tatoos')->store('public/tatoos');

        $url = Storage::url($tatoos);

        //dd($url);
        // return $url;

        // $validated = $request->validate([
        //     'title' => ['required', 'min:4'],
        //     'body' => ['required']
        // ]/*,[
        //     'title.required' => 'Error diferente :attribute'
        // ]*/);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->tatoos = $url;
        $post->save();
        // Post::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);
        //

        // session()->flash('status', 'Post creado');

        return to_route('posts.index')->with('status', 'Post creado!');
    }

    public function update(Request $request, Post $post)
    {

        // $validated = $request->validlaatehola([
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

        $request->validate([
            'tatoos' => 'required|image'
        ]);

        $tatoos = $request->file('tatoos')->store('public/tatoos');

        $url = Storage::url($tatoos);

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->tatoos = $url;
        $post->update();

        // $post->update([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        //     'tatoos' => $request->input('tatoos'),
        // ]);

        // $post->update($request->validated());

        session()->flash('status', 'Post se actualizo');

        return to_route('posts.show', $post)->with('status', 'Post editado!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post eliminado');
    }
}
