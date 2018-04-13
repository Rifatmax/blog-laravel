<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Post extends Model
{
    protected $table="post";
    public static function formstore($data)
	
	{
	
		
		$content=Input::get('content');
		
		
		
		
		$posts=new Post();

		$posts->content=$content;
		
		
		$posts->save();
	}
}
