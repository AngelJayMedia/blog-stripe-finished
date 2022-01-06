<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Jobs\CreatePost;
use App\Jobs\UpdatePost;
use App\Jobs\DeletePost;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(5),
        ]);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'tags'  => Tag::all(),
        ]);
    }

    public function store(PostRequest $request)
    {
        $this->dispatchSync(CreatePost::fromRequest($request));

        return redirect()->route('admin.posts.index')->with('success', 'Post Created!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post'          => $post,
            'tags'          => Tag::all(),
            'selectedTags'  => old('tags', $post->tags()->pluck('id')->toArray()),
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->dispatchSync(UpdatePost::fromRequest($post, $request));

        return redirect()->route('admin.posts.index')->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $this->dispatchSync(new DeletePost($post));

        return redirect()->route('admin.posts.index')->with('success', 'Post Deleted!');
    }
}
