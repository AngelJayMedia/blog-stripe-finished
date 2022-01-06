<?php

namespace App\Jobs;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Http\Requests\PostRequest;
use App\Services\SaveImageService;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class UpdatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $post;
    private $title;
    private $body;
    private $image;
    private $publishedAt;
    private $type;
    private $photoCreditText;
    private $photoCreditLink;
    private $author;
    private $isCommentable;
    private $tags;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        Post $post,
        string $title,
        string $body,
        ?string $image,
        string $publishedAt,
        string $type,
        ?string $photoCreditText,
        ?string $photoCreditLink,
        User $author,
        bool $isCommentable,
        array $tags = []
    ) {
        $this->post = $post;
        $this->title = $title;
        $this->body = $body;
        $this->image = $image;
        $this->publishedAt = $publishedAt;
        $this->type = $type;
        $this->photoCreditText = $photoCreditText;
        $this->photoCreditLink = $photoCreditLink;
        $this->author = $author;
        $this->isCommentable = $isCommentable;
        $this->tags = $tags;
    }

    public static function fromRequest(Post $post, PostRequest $request): self
    {
        return new static(
            $post,
            $request->title(),
            $request->body(),
            $request->image(),
            $request->publishedAt(),
            $request->type(),
            $request->photoCreditText(),
            $request->photoCreditLink(),
            $request->author(),
            $request->isCommentable(),
            $request->tags(),
        );
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Post
    {
        $this->post->update([
            'title'             => $this->title,
            'body'              => $this->body,
            'type'              => $this->type,
            'photo_credit_text' => $this->photoCreditText,
            'photo_credit_link' => $this->photoCreditLink,
            'is_commentable'    => $this->isCommentable ? false : true,
        ]);

        $this->post->syncTags($this->tags);

        if (!is_null($this->image)) {
            File::delete(storage_path('app/' . $this->post->image));
            SaveImageService::UploadImage($this->image, $this->post, Post::TABLE);
        }

        return $this->post;
    }
}
