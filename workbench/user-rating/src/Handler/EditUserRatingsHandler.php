<?php

namespace JcSrc\UserRating\Handler;

use Illuminate\Support\Arr;
use JcSrc\UserRating\EditUserRatings;
use JcSrc\UserRating\Repository\UserRatingsRepository;
use JcSrc\UserRating\Validator\UserRatingsValidator;

class EditUserRatingsHandler
{
    /**
     * @var UserRatingsRepository
     */
    protected $repository;

    /**
     * @var UserRatingsValidator
     */
    protected $validator;

    public function __construct(UserRatingsRepository $repository, UserRatingsValidator $validator)
    {
        $this->repository = $repository;
		$this->validator = $validator;
    }

    public function handle(EditUserRatings $command)
    {
        $actor = $command->actor;
        $data = $command->data;

        $actor->assertCan('...');

        // ...

        return $model;
    }
}
