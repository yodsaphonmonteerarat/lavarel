<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Customer;

class PostController extends Controller
{
    public function getCommentsByPost($id)
    {
        $post = Post::find($id);
        $comments = Post::find($id)->comments;
        return view(
            'findcomments'
            ,
            compact('comments', 'post')
        );
    }

    public function postByCust($id)
    {
        $customer = Customer::find($id);
        $posts = Customer::find($id)->manyPost;
        return view('postByCust', compact('customer', 'posts'));
    }
}
