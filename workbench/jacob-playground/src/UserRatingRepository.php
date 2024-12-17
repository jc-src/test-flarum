<?php

namespace Jacob\Playground;

use Flarum\User\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Jacob\Playground\UserRating;

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

    public static function findByUser(User $actor = null): UserRating
    {
        $variable = Arr::get($actor->id, 'user_id');
        return UserRating::findOrFail($variable);
    }
}
