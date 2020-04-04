<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Redirect;
class PostController extends Controller
{
    public function index(){

        $postList = Post::all();
        // return $showPostList;
        return view ('Post.index' , compact('postList'));
    }
    public function create()
    {
        return view('Post.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required',
            'description' => 'required | min:5'
        ]);
        //Log::info($input);
        Post::create($input);
        return Redirect::to('posts')->with('message', 'Post Created Successfully.');

    }


    public function show($id)
    {
        $post = Post::findorFail($id);

        return view('Post.show', compact('post'));

    }


    public function edit($id)
    {
        $post = Post::findorFail($id);
        return view('Post.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'title' => 'required',
            'description' => 'required | min:5'
        ]);
        $post =  Post::findOrFail($id);

        $post ->update($input);

        return redirect('posts')->with('success_message_for_Update','Item has been updated successfully.');
    }


    public function destroy($id)
    {
        $post = Post::findorFail($id);
        $post  -> Delete();
        return redirect('posts')->with('Delete_message_for_delete','SuccessFully Deleted');
    }

}
