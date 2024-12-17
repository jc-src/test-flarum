<?php

namespace Jacob\Playground\Access;

use Carbon\Carbon;
use Jacob\Playground\UserRating;
use Flarum\User\Access\AbstractPolicy;
use Flarum\User\User;

class UserRatingPolicy extends AbstractPolicy
{
    public function view(User $actor, User $user)
    {
        // Suspended users won't show their Rating, unless allowed to edit
        if (!$actor->hasPermission('jp-user-rating.editAny') && $this->isSuspended($user)) {
            return $this->deny();
        }

        // We only let the user see its own ratings if they are also allowed to edit it
        if (($actor->id === $user->id && $actor->hasPermission('jp-user-rating.editOwn'))
            || $actor->hasPermission('jp-user-rating.view')
        ) {
            return $this->allow();
        }

        return $this->deny();
    }

    protected function isSuspended(User $user): bool
    {
        // suspended_until is null if flarum/suspend isn't installed
        // laravel sets all non existing attributes to null
        // suspend_until is also null if the user isn't suspended.
        /** @phpstan-ignore-next-line */
        return $user->suspended_until !== null
            && $user->suspended_until instanceof Carbon
            && $user->suspended_until->isFuture();
    }
}
