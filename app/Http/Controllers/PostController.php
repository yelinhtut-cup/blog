<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts=Post::all();
     return view('post/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();
        return view('post/create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
        $post=Post::create($this->validateRequest());
        $this->storeImage($post);
        $post->save();
        return redirect('/post');
//        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=Post::find($id);
       return view('/post/show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post=Post::find($id);

       return view('/post/edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $post->update($this->validateRequest());
        $this->storeImage($post);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post');
    }
    private function validateRequest(){
        return request()->validate([
            'title'=>'required|min:3',
            'content'=>'required|min:5',
            'author'=>'required',
            'image'=>'sometimes|file|image|max:70000'

        ]);
    }
    private function storeImage($post){
        if(request()->has('image')){
            $post->update([
                'image'=>request()->image->store('uploads','public')
            ]);
        }
        $image=Image::make(public_path('storage/'.$post->image))->fit(250,250);
        $image->save();
    }
}
