<?php

/*
 * This file is part of jcsrc/user-rating.
 *
 * Copyright (c) 2025 J.Christensen.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace JcSrc\UserRating;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),
    (new Extend\Routes('api'))
        ->get('', 'userRating.index', iewUserRating::class)
        ->get('/user-ratings', 'user-ratings.index', ListUserRatingsController::class)
        ->get('/user-ratings/{id}', 'user-ratings.show', ShowUserRatingsController::class)
        ->post('/user-ratings', 'user-ratings.create', CreateUserRatingsController::class)
        ->patch('/user-ratings/{id}', 'user-ratings.update', UpdateUserRatingsController::class)
        ->delete('/user-ratings/{id}', 'user-ratings.delete', DeleteUserRatingsController::class),
    (new Extend\Policy())
        ->modelPolicy(UserRating::class, UserRatingPolicy::class)
        ->modelPolicy(UserRatings::class, UserRatingsPolicy::class),
];
