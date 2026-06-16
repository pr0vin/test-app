<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogService
{
    public function filter($blogs, $request)
    {
        if ($request->title) {
            $blogs = $blogs->where('title', 'like', '%' . $request->title . '%');
        }
        if ($request->blog_category_id) {
            $blogs = $blogs->where('blog_category_id', $request->blog_category_id);
        }
        if ($request->sort == 'desc') {
            $blogs = $blogs->orderBy('created_at', 'desc');
        }

        return $blogs;
    }

    public function saveImage($request)
    {
        $path = null;
        if ($request->hasFile('image')) {
            $path = Storage::putFile('blog-images', $request->file('image'));
        }
        return $path;
    }
}
