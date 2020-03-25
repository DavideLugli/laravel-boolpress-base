<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      return view('posts.index', compact('posts'));
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
    public function store(Request $request)
    {
    $data = $request->all();
    $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'paragraph' => 'required|string|',
            'author' => 'required|string|max:255',
            ]);
    $newPost = new Post;
    $newPost->fill($data);
   $saved = $newPost->save();
    if ($saved) {
    return redirect()->route("posts.show", $newPost);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      if(empty($post)) {
      abort('404');
  }

  return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
    return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    $data = $request->all();
    $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'paragraph' => 'required|string|',
            'author' => 'required|string|max:255',
            ]);
    $post->fill($data);
    $updated = $post->update();
    if ($updated) {
    return redirect()->route('posts.show', $post);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      if (empty($post)) {
            abort('404');
          }
      $post->delete();
      return redirect()->route('posts.index')->with('id_delete',
      $post->id);    //
    }
}
