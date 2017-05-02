<?php

namespace App\Http\Controllers;

use Gate;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function show(Post $post)
	{
		auth()->loginUsingId(1);
		// auth()->logout();
		return view('posts.show', compact('post'));
	}
}
