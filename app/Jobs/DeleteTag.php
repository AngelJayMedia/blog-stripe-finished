<?php

namespace App\Jobs;

use App\Models\Tag;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class DeleteTag implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function handle()
    {
        if (!is_null($this->tag->image)) {
            File::delete(storage_path('app/' . $this->tag->image));
        }
        $this->tag->delete();
    }
}
