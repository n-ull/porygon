<?php

namespace App\Policies;

use App\Models\Draft;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DraftPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
        return $user->isAdmin()
            ? Response::allow()
            : Response::denyWithStatus(404);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Draft $draft): Response
    {
        return  $draft->user_id === $user->id || $draft->published
            ? Response::allow()
            : Response::denyWithStatus(404);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->drafts()->count() < config('drafts.max_drafts_per_user');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Draft $draft): bool
    {
        return $draft->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Draft $draft): bool
    {
        return $draft->user_id === $user->id || $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Draft $draft): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Draft $draft): bool
    {
        return $user->isAdmin();
    }
}
