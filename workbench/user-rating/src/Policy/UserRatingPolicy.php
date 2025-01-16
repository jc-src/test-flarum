<?php

namespace JcSrc\UserRating\Policy;

use JcSrc\UserRating\UserRating;
use Flarum\User\Access\AbstractPolicy;
use Flarum\User\User;

class UserRatingPolicy extends AbstractPolicy
{
    public function can(User $actor, string $ability, UserRating $model)
    {
        // See https://docs.flarum.org/extend/authorization.html#custom-policies for more information.
    }
}
