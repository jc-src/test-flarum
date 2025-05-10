<?php

namespace JcSrc\UserRating\Repository;

use Flarum\User\User;
use Illuminate\Database\Eloquent\Builder;
use JcSrc\UserRating\UserRating;

class UserRatingRepository
{
    /**
     * @return Builder
     */
    public function query()
    {
        return UserRating::query();
    }

    /**
     * @param int $id
     * @param User $actor
     * @return UserRating
     */
    public function findOrFail($id, User $actor = null): UserRating
    {
        return UserRating::findOrFail($id);
    }
}
