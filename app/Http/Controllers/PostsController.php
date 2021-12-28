<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\UnauthorizedException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    public function show($id) 
    {
        auth()->loginUsingId(1);
//        Auth::logout();

        $post = Post::findOrFail($id);

        if( Gate::denies('update', $post)){
            abort(403, 'Nope.');
        }
        return view('show', compact('post'));
    }
}
