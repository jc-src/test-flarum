<?php

/*
 * This file is part of jacob/playground.
 *
 * Copyright (c) 2024 Jacob.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Jacob\Playground;

use Flarum\Extend;
use Flarum\User\User;

return [
    (new Extend\Model(User::class))
        ->cast('rating', 'decimal'),
    (new Extend\Model(User::class))
        ->hasMany('ratings', UserRating::class, 'user_id', 'id'),
    (new Extend\Policy())
        ->modelPolicy(UserRating::class, Access\UserRatingPolicy::class)
        ->modelPolicy(UserRating::class, Access\UserRatingPolicy::class),
    (new Extend\Routes('api'))
        ->get('/user-ratings', 'user-ratings.index', Api\Controller\ListUserRatingsController::class)
        ->get('/user-ratings/{id}', 'user-ratings.show', Api\Controller\ShowUserRatingController::class)
        ->post('/user-ratings', 'user-ratings.create', Api\Controller\CreateUserRatingController::class)
        ->patch('/user-ratings/{id}', 'user-ratings.update', Api\Controller\UpdateUserRatingController::class)
        ->delete('/user-ratings/{id}', 'user-ratings.delete', Api\Controller\DeleteUserRatingController::class)
];
