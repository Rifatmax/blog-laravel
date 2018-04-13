<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Input;
use Redirect;
class PostController extends Controller
{
     public function store()
	{
		$data=Input::except(array('_token'));
		
		    Post::formstore($data);
			//model::function name[note]
			
		 
			return redirect('/');
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
			
		
	}
	
	public function show_posts()
    {
		//$register_users=Register::all();(by calling this method you will get all data in a single page)
      $post= Post::paginate(10);
      return view('post.post_list', compact('post'));
    }
	
	
	public function all_posts()
    {
		//$register_users=Register::all();(by calling this method you will get all data in a single page)
      $post= Post::paginate(5);
      return view('post.allpost', compact('post'));
    }
	
	
	
	
	
	
	public function edit($id)
	{
		$Data= Post:: findOrFail($id);
		 return view('post.edit_post', compact('Data'));
		
	}
	
	
	
	public function updatepost(  Request $request,$id)
	{
		$Data= Post:: findOrFail($id);
		$Data->content=$request->content;
		
		$Data->save();
		return Redirect('posts');
		
	}
	
	
	public function delete_post($id)
	{
		$user= Post:: findOrFail($id);
         $user->delete();
			return Redirect('posts')->with('msg',' One post deteted successfully');
	}
	
	
	 public function admin_inset_post()
	{
		
		$data=Input::except(array('_token'));

		    Post::formstore($data);
			return Redirect('posts')->with('success','One post successfully inserted!');
			
			
			//return Redirect::to('register')->with('success','Succesfully registered! Login now!!');
		}  
	
	
	public function show_post_details($id)
	{
		$Data= Post:: findOrFail($id);
		 return view('post.post_details', compact('Data'));
		
	}
}
