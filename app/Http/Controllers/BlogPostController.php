<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('tags')->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show(BlogPost $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('blog.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
        ]);

        $blogPost = BlogPost::create($request->only('title', 'content'));
        $blogPost->tags()->sync($request->tags);

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(BlogPost $blog)
    {
        $tags = Tag::all();
        return view('blog.edit', compact('blog', 'tags'));
    }

    public function update(Request $request, BlogPost $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
        ]);

        $blog->update($request->only('title', 'content'));

        $blog->tags()->sync($request->tags);

        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully.');
    }
}
