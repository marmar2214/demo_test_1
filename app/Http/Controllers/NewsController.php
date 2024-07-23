<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
// use App\Http\Requests\NewsUpdateRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $default=[
            'title' => 'News',
            'active'=> 'News',
        ];
        $news = News::all();
        return view('news.index', compact('news'), $default);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $default=[
            'title' => 'News',
            'active'=> 'News',
        ];
        return view('news.create',  $default);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;

        if ($request->hasFile('image')){
            $imagePath = $request->file('image')->stire('news_images', 'public');
            $news->image=$imagePath;
        }
        $news->save();
        return redirect()->route('news.index')->with('success','news saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News  $news)
    {
        // $news = News::findOrFail($id);
        // return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        // $news = News::findOrFail($id);
        // $news->title = $request->title;
        // $news->description = $request->description;

        // $news->update($request->vilidate());
        // if($request->hasFile('image')){
        //     $imagePath = $request->file('image')->stire('news_image', 'public');
        //     $news->image = $imagePath;
        // }
        // $news->save();
        // return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $news = News::findOrFail($id);
        // $news->delete();
        // return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
