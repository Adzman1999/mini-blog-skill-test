<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('updated_at', 'desc')->get();
        return view('blogs.index', compact('blogs'));
    }

    // Show Create Form
    public function create()
    {
        $blogs = Blog::all();
        return view('blogs.create', compact('blogs'));
    }

    // Store Blog Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::create($formFields);

        return redirect('/')->with('message', 'Blog created successfully!');
    }

    // Show Edit Form
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    // Update Data
    public function update(Request $request, Blog $blog)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog->update($formFields);

        return redirect('/')->with('message', 'Blog updated successfully!');
    }

    // Delete Blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/')->with('message', 'Blog deleted successfully');
    }
}
