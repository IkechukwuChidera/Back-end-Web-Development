<?php

namespace App\Http\Controllers;
use App\Post;  //to import our model
use Illuminate\Http\Request;
// use Illuminate\Http\Request\FormRequest; we use this when using request form method


class PostController extends Controller
{
    // public function create(){
    //     return view('classpost');
    // }

    // //method for storing
    // public function Store(Request $request){
    //     $validateData = $request->validate ([
    //            'title' => 'required|min:6', 
    //             'body'=> 'required|min:10']);


    //     $post=new Post([
    //         'title'=>$request->title,  // gives data from the database
    //         'body'=>$request->body  // 
    //     ]);
    //     //$post->save();    for saving to db, (to tell the user if it was successful , use if ($post-> save){return redirect() ->back()-> with ('status')}
    //     return redirect()->back();

    //     //redirects to above view
    // }
    
    

    public function index() {
        $posts = Post::all();
        return view('posts.index',compact('posts',$posts));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view ('posts.create');

        
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


        $validateData = $request->validate ([
            'title' => 'required|min:6', 
             'body'=> 'required|min:10']);


    //  $post=new Post([
    //      'title'=>$request->title,  // gives data from the database
    //      'body'=>$request->body  // 
    //  ]);
    //    $post->save();
    Post::create($request->all());
     return redirect()->route('posts.index')->with('message','Experience Post created successfully.');

        //
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    }

    public function show(Post $post){
        return view ('posts.show', compact('post', $post ));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {

        return view('posts.edit',compact('post',$post));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {

        $validateData = $request->validate ([
            'title' => 'required|min:6', 
             'body'=> 'required|min:10'
            ]);
        //
        $post->update($request->all());
   return redirect()->route('posts.index')

                        ->with('message','Experience Post updated successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) {

        $post->delete();

  

        return redirect()->route('posts.index')

                        ->with('success','Experience Post deleted successfully');


        //
    }
}


