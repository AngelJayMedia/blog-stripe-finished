<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    const SUPERADMIN = 'superAdmin';
    const ADMIN = 'admin';
    const BAN = 'ban';
    const DELETE = 'delete';
    const ADMINROUTE = 'adminRoute';

    public function superAdmin(User $user): bool
    {
        return $user->isAdmin() || $user->superAdmin();
    }

    public function adminRoute(User $user): bool
    {
        return $user->isAdmin() || $user->isWriter() || $user->isSuperAdmin();
    }

    public function admin(User $user): bool
    {
        return $user->isAdmin() || $user->isModerator();
    }

    public function ban(User $user, User $subject): bool
    {
        return ($user->isAdmin() && !$subject->isAdmin()) ||
            ($user->isModerator() && !$subject->isAdmin() && !$subject->isModerator());
    }

    public function delete(User $user, User $subject)
    {
        return ($user->isAdmin() || $user->matches($subject)) && !$subject->isAdmin();
    }
}
