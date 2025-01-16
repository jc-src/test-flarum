<?php

namespace JcSrc\UserRating\Policy;

use JcSrc\UserRating\UserRatings;
use Flarum\User\Access\AbstractPolicy;
use Flarum\User\User;

class UserRatingsPolicy extends AbstractPolicy
{
    public function can(User $actor, string $ability, UserRatings $model)
    {
        // See https://docs.flarum.org/extend/authorization.html#custom-policies for more information.
    }
}
