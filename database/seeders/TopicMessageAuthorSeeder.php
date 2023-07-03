<?php

namespace Database\Seeders;

use App\Models\TopicMessageAuthor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TopicMessageAuthorSeeder extends Seeder
{
    private array $issetUsers = [];
    private int $recursionCounter = 0;
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
        $collection = TopicMessageAuthor::factory()->count(25)->make()
            ->each([$this, 'setUser']);

        $collection->each(function ($author) {
            $author->save();
        });
    }

    public function setUser(TopicMessageAuthor $author)
    {
        $this->recursionCounter++;
        $random = random_int(1, 100);
        if(!in_array($random, $this->issetUsers)) {
            $this->issetUsers[] = $random;
        } else {
            $this->setUser($author);
            return;
        }
        $user = User::find($random);
        $author->setUser($user);
    }
}
