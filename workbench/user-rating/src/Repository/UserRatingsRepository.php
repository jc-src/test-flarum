<?php

namespace JcSrc\UserRating\Repository;

use Flarum\User\User;
use Illuminate\Database\Eloquent\Builder;
use JcSrc\UserRating\UserRatings;

class UserRatingsRepository
{
    /**
     * @return Builder
     */
    public function query()
    {
        return UserRatings::query();
    }

    /**
     * @param int $id
     * @param User $actor
     * @return UserRatings
     */
    public function findOrFail($id, User $actor = null): UserRatings
    {
        return UserRatings::findOrFail($id);
    }
}
