<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Jobs\CreateTag;
use App\Jobs\UpdateTag;
use App\Jobs\DeleteTag;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TagController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Tag::class, 'tag');
    }

    public function index()
    {
        return view('admin.tags.index', [
            'tags'  => Tag::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(TagRequest $request)
    {
        $this->dispatchSync(CreateTag::fromRequest($request));

        return redirect()->route('admin.tags.index')->with('success', 'Tag Created!');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $this->dispatchSync(UpdateTag::fromRequest($tag, $request));

        return redirect()->route('admin.tags.index')->with('success', 'Tag Updated!');
    }

    public function destroy(Tag $tag)
    {
        $this->dispatchSync(new DeleteTag($tag));

        return redirect()->route('admin.tags.index')->with('success', 'Tag Deleted!');
    }
}
