<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Http\Requests\VideoRequest;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
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
        $video = Video::orderBy('id', 'desc')->first();
        $videos = Video::orderBy('id', 'dec')->paginate(6);
        $page = $videos->currentPage();
        return view('videos')->with('play', $video)->with('videos', $videos)->with('page', $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.createVideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        if($request->hasFile('thumbnail')){
            $fileWithExt = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('thumbnail')->getClientOriginalExtension();

            $fileNameToSave = $filename.'_'.time().'.'.$ext;

            $path = $request->file('thumbnail')->storeAs('public/thumbnails', $fileNameToSave);
        }else{
            $fileNameToSave = 'thumb.jpg';
        }

        $video = new Video;
        $video->src = $request->src;
        $video->text = $request->text;
        $video->thumbnail = $fileNameToSave;

        $video->save();

        return redirect(route('videos.index'))->with('success', 'Video added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        $videos = Video::orderBy('id', 'dec')->paginate(6);
        $page = $videos->currentPage();
        return view('videos')->with('play', $video)->with('videos', $videos)->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('videos.editVideo')->with('video', Video::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->src = $request->src;
        $video->text = $request->text;

        if($request->hasFile('thumbnail')){

            $image = $video->thumbnail;
            if($image != 'thumbnails/thumb.jpg'){
                Storage::delete('public/'.$image);
            }

            $fileWithExt = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $ext = $request->file('thumbnail')->getClientOriginalExtension();
            $fileNameToSave = $filename.'_'.time().'.'.$ext;

            $path = $request->file('thumbnail')->storeAs('public/thumbnails', $fileNameToSave);
            $video->thumbnail = $fileNameToSave;
        }

        $video->update();

        return redirect(route('videos.index'))->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Video::findOrFail($id)->thumbnail;

        if($image != 'thumbnails/thumb.jpg'){
            Storage::delete('public/'.$image);
        }

        Video::findOrFail($id)->delete();
        return redirect(route('videos.index'))->with('success', 'Video removed successfully!');
    }
}
