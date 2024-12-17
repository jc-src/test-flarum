<?php

namespace Jacob\Playground\Command;

use Illuminate\Support\Arr;
use Jacob\Playground\UserRatingRepository;
use Jacob\Playground\UserRatingValidator;

class CreateUserRatingHandler
{
    /**
     * @var UserRatingRepository
     */
    protected $repository;

    /**
     * @var UserRatingValidator
     */
    protected $validator;

    public function __construct(UserRatingRepository $repository, UserRatingValidator $validator)
    {
        $this->repository = $repository;
		$this->validator = $validator;
    }

    public function handle(CreateUserRating $command)
    {
        $actor = $command->actor;
        $data = $command->data;

        $actor->assertCan('...');

        // ...

        return $model;
    }
}
