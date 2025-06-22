<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('index', compact('posts'));
    }

    public function create()
    {
        $posts = BlogPost::latest()->get();

        return view('create', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|nullable'
        ]);

        $imagePath = $request->image
            ? $request->file('image')->store('uploads', 'public')
            : null;

        BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath
        ]);

        return redirect()->route('index');
    }

    // BlogController.php

public function edit($id)
{
    $post = BlogPost::findOrFail($id);
    return view('edit', compact('post'));
}

public function update(Request $request, $id)
{
    $post = BlogPost::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'image|nullable'
    ]);

    $imagePath = $request->image
        ? $request->file('image')->store('uploads', 'public')
        : $post->image_path;

    $post->update([
        'title' => $request->title,
        'content' => $request->content,
        'image_path' => $imagePath
    ]);

    return redirect()->route('admin.blog.create')->with('success', '更新しました');
}

public function destroy($id)
{
    $post = BlogPost::findOrFail($id);
    $post->delete();

    return redirect()->route('admin.blog.create')->with('success', '削除しました');
}

}
