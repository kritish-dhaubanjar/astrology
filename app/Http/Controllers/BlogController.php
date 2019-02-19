<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(3);
        return view('blog')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        if($request->hasFile('image')){
            $fileWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();

            $fileNameToSave = $filename.'_'.time().'.'.$ext;

            $path = $request->file('image')->storeAs('public/blogs', $fileNameToSave);
        }else{
            $fileNameToSave = 'blog.jpg';
        }

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->image = $fileNameToSave;

        $blog->save();

        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.blogPost')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blogs.editBlog')->with('blog', Blog::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->body = $request->body;

        if($request->hasFile('image')){

            $image = $blog->image;
            if($image != 'blogs/blog.jpg'){
                Storage::delete('public/'.$image);
            }

            $fileWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileNameToSave = $filename.'_'.time().'.'.$ext;

            $path = $request->file('image')->storeAs('public/blogs', $fileNameToSave);
            $blog->image = $fileNameToSave;
        }

        $blog->update();

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Blog::findOrFail($id)->image;

        if($image != 'blogs/blog.jpg'){
            Storage::delete('public/'.$image);
        }

        Blog::findOrFail($id)->delete();
        return redirect(route('blog.index'))->with('success', 'Blog Post removed successfully!');
    }
}
