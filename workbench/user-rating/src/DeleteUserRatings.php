<?php

namespace JcSrc\UserRating;

use Flarum\User\User;

class DeleteUserRatings
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var \Flarum\User\User
     */
    public $actor;

    /**
     * @var array
     */
    public $data;

    public function __construct($modelId, User $actor, array $data)
    {
        $this->modelId = $modelId;
        $this->actor = $actor;
        $this->data = $data;
    }
}
