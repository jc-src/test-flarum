<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

// HINT: you might want to use a `Flarum\Database\Migration` helper method for simplicity!
// See https://docs.flarum.org/extend/models.html#migrations to learn more about migrations.
return Migration::addColumns(
    'users',
    [
        'rating' => [
            'type' => 'decimal',
            'total' => 3,
            'places' => 2,
            'nullable' => false,
            'default' => 0
        ]
    ]
);

