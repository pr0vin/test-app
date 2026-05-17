<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //

    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(BlogRequest $request)
    {

        $validated = $request->validated();

        $path = null;
        if ($request->hasFile('image')) {
            $path = Storage::putFile('blog-images', $request->file('image'));
        }

        $validated['image'] = $path;

        $blog = Blog::create($validated);

        return redirect()->route('blogs')->with('success', "Blog Created Successfuly!");
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);

    //     $path = null;
    //     if ($request->hasFile('image')) {
    //         $path = Storage::putFile('blog-images', $request->file('image'));
    //     }

    //     $validated['image'] = $path;

    //     $blog = Blog::create($validated);

    //     return redirect()->route('blogs')->with('success', "Blog Created Successfuly!");
    // }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($request->hasFile('image')) {

            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $path = Storage::putFile('blog-images', $request->file('image'));
        }

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => isset($path) ? $path : $blog->image

        ]);
        return redirect()->route('blogs');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs')->with('success', "Blog Dleted Successfuly!");
    }
}
