<?php

namespace App\Http\Controllers\Writer;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __invoke()
    {
        return view('writer.posts.index', [
            'posts' => Post::where('author_id', auth()->id())->paginate(5),
        ]);
    }
}
