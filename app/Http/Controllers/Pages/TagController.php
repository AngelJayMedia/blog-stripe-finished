<?php

namespace App\Http\Controllers\Pages;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        return view('pages.tags.index', [
            'tags'  => Tag::all(),
        ]);
    }

    public function show(Tag $tag)
    {
        return view('pages.tags.show', [
            'tag'       => $tag,
            'posts'     => Post::forTag($tag->slug())->paginate(8),
        ]);
    }
}
