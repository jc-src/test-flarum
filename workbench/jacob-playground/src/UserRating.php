<?php

namespace Jacob\Playground;

use Flarum\Database\AbstractModel;
use Flarum\Database\ScopeVisibilityTrait;
use Flarum\Foundation\EventGeneratorTrait;
use Flarum\User\User;

/**
 * @property int $id
 * @property int $user_id
 * @property float $rating
 * @property string $comment
 * @property int $created_by
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class UserRating extends AbstractModel
{
    // See https://docs.flarum.org/extend/models.html#backend-models for more information.
    
    protected $table = 'user_rating';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function createdBy()
    {
        return $this->created_by ? User::query()->find($this->created_by) : null;
    }
}
