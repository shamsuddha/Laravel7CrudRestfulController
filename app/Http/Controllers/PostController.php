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

    public function edit($id)
    {
        $editPost = Post::findorFail($id);
        return view('Post.editPost',compact('editPost'));
    }
    public function update(Request $request, $id)
    {
        $brand_name         =   $request->brand_name;
        $find_catagory      =   Post::findOrFail($id);

        $update_brand_name  =   $find_catagory->update([
            'brand_name'    =>  trim(ucwords(strtolower($brand_name)))
        ]);

        return redirect('brand')->with('succses_message_for_Update','Item has been updated successfully.');
    }


    public function destroy($id)
    {
        $deletebrand_name = Post::findorFail($id);
        $deletebrand_name -> Delete();
        return redirect('brand')->with('Delete_message_for_delete','SuccessFully Deleted');
    }

}
