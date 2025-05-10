<?php

namespace JcSrc\UserRating\Handler;

use Illuminate\Support\Arr;
use JcSrc\UserRating\DeleteUserRatings;
use JcSrc\UserRating\UserRatingsRepository;

class DeleteUserRatingsHandler
{
    /**
     * @var UserRatingsRepository
     */
    protected $repository;

    public function __construct(UserRatingsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(DeleteUserRatings $command)
    {
        $actor = $command->actor;
        $data = $command->data;

        $actor->assertCan('...');

        // ...

        return $model;
    }
}
