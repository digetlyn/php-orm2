<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function allPosts()   // public function allPosts() 전체 게시물을 보여주겠다. 사용자가 이름 임의 저장 가능
    {
        $posts = Post::paginate(10); //10개씩
        return view('posts', compact('posts')); // ['posts' => $posts]; 이런식의 배열과 동일하다.
    }
}
