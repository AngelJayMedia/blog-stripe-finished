<?php

namespace App\Traits;

use App\Contracts\CommentAble;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 */
trait HasCommentable
{
    public function commentAbleRelation(): MorphTo
    {
        return $this->morphTo('commentAbleRelation', 'commentable_type', 'commentable_id');
    }

    public function commentAble(): CommentAble
    {
        return $this->commentAbleRelation;
    }

    public function to(CommentAble $commentAble)
    {
        return $this->commentAbleRelation()->associate($commentAble);
    }
}
