<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::latest()->get();

        return view('post.index-template');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'judul' =>'required',
                'slug' =>'required|unique:posts',
                'excerpt' =>'required',
                'body' =>'required',
                'poster' => 'required|file|image|max:2000',
            ]
            );
            if($request->hasFile('poster')){
                $validate['poster'] = $request->file('poster');
                $ext = $validate['poster']->getClientOriginalExtension();
                $filename= "poster-" . time() . "." .$ext;
                request()->poster->move(public_path('storage/'), $filename);
                $validate['poster'] = $filename;

            }



            Post::create($validate);
            return redirect('post/')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate(
            [
                'judul' =>'required',
                'slug' =>'required|unique:post',
                'excerpt' =>'required',
                'body' =>'required',
                'poster' => 'required|file|image|max:2000',
            ]
            );

            if($request->slug != $post->slug){
                $validate['slug'] ='required|unique:post';
            }
            if($request->hasFile('poster')){
                if ($request->oldPoster){
                    unlink($request->oldPoster);
                }
                $validate['poster'] = $request->file('poster');
                $ext = $validate['poster']->getClientOriginalExtension();
                $filename= "poster-" . time() . "." .$ext;
                request()->poster->move(public_path('storage/'), $filename);
                $validate['poster'] = $filename;

            }
            Post::where('id', $post->id)->update($validate);
            return redirect('posts-dashboard/')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
