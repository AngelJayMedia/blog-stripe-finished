<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface CommentAble
{
    public function title(): string;

    public function comments();

    public function latestComments(int $amount = 5);

    public function deleteComments();

    public function commentsRelation(): MorphMany;

    public function commentAbleTitle(): string;
}
