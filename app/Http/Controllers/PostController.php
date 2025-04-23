<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User; 
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all(); 
        return view('posts.create_post', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->enabled = $request->input('enabled', false); 
        $post->user_id = $request->input('user_id');
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show_post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
    
        $validatedData = $request->validated();
    
        $post->update([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'enabled' => $request->has('enabled'),
        ]);
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
    
}
