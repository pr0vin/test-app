<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogCategory;
use App\Models\Tag;
use App\Services\BlogService;

class BlogController extends Controller
{
    //
    public $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }


    public function index(Request $request)
    {

        $blogs = Blog::with(['blogCategory', 'tags']);
        $blogs = $this->blogService->filter($blogs, $request);
        $blogs = $blogs->paginate(10);

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        // $categories = BlogCategory::all();
        $tags = Tag::all();
        $blog = new Blog();
        return view('blogs.create', compact('tags', 'blog'));
    }

    public function store(BlogRequest $request)
    {

        $validated = $request->validated();


        $path = $this->blogService->saveImage($request);

        $validated['image'] = $path;

        $blog = Blog::create($validated);

        $blog->tags()->sync($validated['tags']);

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
        $tags = Tag::all();
        return view('blogs.create', compact('blog', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($request->hasFile('image')) {

            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $path = $this->blogService->saveImage($request);
        }

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => isset($path) ? $path : $blog->image,
            'blog_category_id' => $request->blog_category_id

        ]);
        return redirect()->route('blogs');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs')->with('success', "Blog Dleted Successfuly!");
    }
    public function indexApi()
    {
        $blogs = Blog::with(['blogCategory', 'tags'])->get();
        return response()->json($blogs);
    }
}
