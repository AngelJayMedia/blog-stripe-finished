<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    const CREATE = 'create';
    const UPDATE = 'update';
    const DELETE = 'delete';

    public function before(User $user): bool
    {
        return $user->isSuperAdmin() || $user->isAdmin() || $user->isModerator();
    }

    public function create(User $user): bool
    {
        return $user->hasVerifiedEmail();
    }

    public function update(User $user, Post $post): bool
    {
        return $post->isAuthoredBy($user);
    }

    public function delete(User $user, Post $post): bool
    {
        return $post->isAuthoredBy($user);
    }
}
