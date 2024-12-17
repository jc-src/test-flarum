<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

return Migration::createTable(
    'user_rating',
    function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')
            ->references('id')->on('users');
        $table->smallInteger('rating')
            ->nullable(false)->default(0);
        $table->tinyText('comment')
            ->nullable(true)->default(null);
        $table->integer('created_by')->unsigned();
        $table->foreign('created_by')
            ->references('id')->on('users');
        // created_at & updated_at
        $table->timestamps();
    }
);

