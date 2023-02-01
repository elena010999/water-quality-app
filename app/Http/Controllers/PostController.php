<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', 'is_admin']);
  }

  public function index()
  {
    $posts = Post::orderBy('id', 'desc')->paginate(6);
    return view('posts.index', compact('posts'));
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'content' => 'required|min:50',
      'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $imageName = time() . '.' . $request->file->extension();
    $request->file->storeAs('public/images', $imageName);
    $postData = ['title' => $request->title, 'content' => $request->content, 'image' => $imageName];
    Post::create($postData);
    return redirect('admin/posts/index')->with(['message' => 'Post added successfully!', 'status' => 'success']);
  }

  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }

  public function edit(Post $post)
  {
    return view('posts.edit', compact('post'));
  }

  public function update(Request $request, Post $post)
  {
    $imageName = '';
    if ($request->hasFile('file')) {
      $imageName = time() . '.' . $request->file->extension();
      $request->file->storeAs('public/images', $imageName);
      if ($post->image) {
        Storage::delete('public/images/' . $post->image);
      }
    } else {
      $imageName = $post->image;
    }
    $postData = ['title' => $request->title, 'content' => $request->content, 'image' => $imageName];
    $post->update($postData);
    return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
  }

  public function destroy(Post $post)
  {
    Storage::delete('public/images/' . $post->image);
    $post->delete();
    return redirect('admin/posts/index')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
  }
  public function postsTotal() {
    $postCount = Post::count();
    return view('/adminHome', compact('postCount'));
}
}
