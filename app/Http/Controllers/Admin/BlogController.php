<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $blog = Blog::where('status', '!=', 1)->get();
            return $blog;
        }
        return view('admin.blog.blog');
    }

    public function createBlog(Request $request)
    {
        if ($request->isMethod('post')) {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->description = $request->description;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('storage/app/public/uploads/blogs/', $filename);
                $blog->image = $filename;
            }

            $blog->save();
            return response()->json([
                'status' => 200,
                'success' => 'Blog Added Sucessfully',
            ]);
        }
        return view('admin.blog.create_blog');
    }

    public function editBlog(Request $request)
    {
        $data['blog'] = Blog::find($request->id);
        return view('admin.blog.edit_blog', compact('data'));
    }

    public function updateBlog(Request $request)
    {
        $blog = Blog::find($request->edit_blog_id);
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {

            $path = "storage/app/public/uploads/blogs/" . $blog->image;

            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/app/public/uploads/blogs/', $filename);
            $blog->image = $filename;
        }

        $blog->update();
        return redirect('blog')->with("success", "Blog Update Sucessfully");
    }
}
