<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignUuid('topic_id')->references('id')->on('topics');
            $table->foreignId('author_id')->references('id')->on('users');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_messages');
    }
}
