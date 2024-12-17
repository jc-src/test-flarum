<?php

namespace Jacob\Playground\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;
use Flarum\User\User;
use Jacob\Playground\UserRating;
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

        return [
            'id' => $model->id,
            'rating' => $model->rating,
            'comment' => $model->comment,
            'user' => $model->created_by,
            'created' => $model->created_at,
        ];
    }
}
