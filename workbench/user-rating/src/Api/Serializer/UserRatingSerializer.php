<?php

namespace JcSrc\UserRating\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;
use JcSrc\UserRating\UserRating;
use InvalidArgumentException;

class UserRatingSerializer extends AbstractSerializer
{
    /**
     * {@inheritdoc}
     */
    protected $type = 'user-ratings';

    /**
     * {@inheritdoc}
     *
     * @param UserRating $model
     * @throws InvalidArgumentException
     */
    protected function getDefaultAttributes($model)
    {
        if (! ($model instanceof UserRating)) {
            throw new InvalidArgumentException(
                get_class($this).' can only serialize instances of '.UserRating::class
            );
        }

        // See https://docs.flarum.org/extend/api.html#serializers for more information.

        return [
            // ...
        ];
    }
}
