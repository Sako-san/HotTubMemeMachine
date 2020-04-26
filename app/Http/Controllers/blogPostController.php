<?php

namespace App\Http\Controllers;

use App\blogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class blogPostController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gets all blogPosts
        return blogPost::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // creates new blogPost
        return blogPost::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('imgUrl')->store('imgFile', 's3');
        
        $post = blogPost::create([
            'Title' => $request->Title,
            'DateOfBirth' => $request->DateOfBirth,
            'DogeRating' => $request->DogeRating,
            'BlogContent' => $request->BlogContent,
            'imUrl' => Storage::disk('s3')->url($path)
        ]);

        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(blogPost $blogPost)
    {
        // shows single post
        return blogPost::findOrFail($blogPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, blogPost $blogPost)
    {
        //
        $bp = blogPost::findOrFail($blogPost);
        $bp->update($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogPost $blogPost)
    {
        //
        $bp = blogPost::findOrFail($blogPost);
        $bp->update($request->all());

        return $bp;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, blogPost $blogPost)
    {
        //
        $bp = blogPost::findOrFail($blogPost);
        $bp->delete();

        return 204;
    }
}
