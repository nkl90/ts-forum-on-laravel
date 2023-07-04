<?php

namespace Database\Seeders;

use App\Models\TopicMessageAuthor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TopicMessageAuthorSeeder extends Seeder
{
//    private array $issetUsers = [];
//    private int $recursionCounter = 0;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Сначала заполняется таблица users
        $this->call([
            UserSeeder::class
        ]);

        // Очищаем таблицу topic_message_authors
        Schema::disableForeignKeyConstraints();
        TopicMessageAuthor::truncate();
        Schema::enableForeignKeyConstraints();
        // Заполняем таблицу topic_message_authors
        TopicMessageAuthor::factory()->times(25)->create();
    }
}
