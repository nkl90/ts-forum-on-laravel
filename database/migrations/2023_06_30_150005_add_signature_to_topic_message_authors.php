<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSignatureToTopicMessageAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topic_message_authors', function (Blueprint $table) {
            $table
                ->string('signature', 255)
                ->nullable()
                ->after('user_id')
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topic_message_authors', function (Blueprint $table) {
            $table->dropColumn('signature');
        });
    }
}
