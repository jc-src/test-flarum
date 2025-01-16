<?php

namespace JcSrc\UserRating\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;
use JcSrc\UserRating\UserRatings;
use InvalidArgumentException;

class UserRatingsSerializer extends AbstractSerializer
{
    /**
     * {@inheritdoc}
     */
    protected $type = 'user-ratings';

    /**
     * {@inheritdoc}
     *
     * @param UserRatings $model
     * @throws InvalidArgumentException
     */
    protected function getDefaultAttributes($model)
    {
        if (! ($model instanceof UserRatings)) {
            throw new InvalidArgumentException(
                get_class($this).' can only serialize instances of '.UserRatings::class
            );
        }

        // See https://docs.flarum.org/extend/api.html#serializers for more information.

        return [
            // ...
        ];
    }
}
