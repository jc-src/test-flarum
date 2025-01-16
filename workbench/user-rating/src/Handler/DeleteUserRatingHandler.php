<?php

namespace JcSrc\UserRating\Handler;

use Illuminate\Support\Arr;
use JcSrc\UserRating\DeleteUserRating;
use JcSrc\UserRating\UserRatingRepository;

class DeleteUserRatingHandler
{
    /**
     * @var UserRatingRepository
     */
    protected $repository;

    public function __construct(UserRatingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(DeleteUserRating $command)
    {
        $actor = $command->actor;
        $data = $command->data;

        $actor->assertCan('...');

        // ...

        return $model;
    }
}
