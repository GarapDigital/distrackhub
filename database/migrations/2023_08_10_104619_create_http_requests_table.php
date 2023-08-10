<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('http_requests', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->index();
            $table->unsignedInteger('user_id')->index()->nullable();
            $table->string('ip')->index();
            $table->boolean('ajax')->index();
            $table->string('url');
            $table->jsonb('payload');
            $table->integer('status_code')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('http_requests');
    }
};
