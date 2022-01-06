<?php

namespace App\Models;

use App\Traits\HasTags;
use App\Casts\TitleCast;
use App\Traits\HasAuthor;
use App\Traits\HasComments;
use Illuminate\Support\Str;
use App\Contracts\CommentAble;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements CommentAble
{
    use HasTags;
    use HasAuthor;
    use HasFactory;
    use HasComments;

    const TABLE = 'posts';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'image',
        'published_at',
        'type',
        'photo_credit_text',
        'photo_credit_link',
        'author_id',
        'is_commentable',
    ];

    // Eager load the relationship
    protected $with = [
        'authorRelation',
        'commentsRelation',
        'tagsRelation',
    ];

    protected $casts = [
        'published_at'      => 'datetime',
        'title'             => TitleCast::class,
        'is_commentable'    => 'boolean',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function publishedAt(): string
    {
        return $this->published_at;
    }

    public function publishedAtDate(): string
    {
        return $this->published_at->format('d F Y');
    }

    public function type(): string
    {
        return $this->type;
    }

    public function isPremium(): bool
    {
        return $this->type() == 'premium';
    }

    public function photoCreditText(): ?string
    {
        return $this->photo_credit_text;
    }

    public function photoCreditLink(): ?string
    {
        return $this->photo_credit_link;
    }

    public function isCommentable(): bool
    {
        return $this->is_commentable;
    }

    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body()), $limit);
    }

    public function image(): string
    {
        return $this->image;
    }

    public function delete()
    {
        $this->removeTags();
        parent::delete();
    }

    public function readTime()
    {
        $minutes = round(str_word_count(strip_tags($this->body())) / 200);

        return  $minutes == 0 ? 1 : $minutes;
    }

    public function commentAbleTitle(): string
    {
        return $this->title();
    }

    public function getRoutekeyName()
    {
        return 'slug';
    }

    public function scopeLoadLatest(Builder $query, $count = 4)
    {
        return $query->published()
            ->latest()
            ->paginate($count);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', new \DateTime());
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->published()
            ->whereHas('tagsRelation', function ($query) use ($tag) {
                $query->where('tags.slug', $tag);
            });
    }
}
