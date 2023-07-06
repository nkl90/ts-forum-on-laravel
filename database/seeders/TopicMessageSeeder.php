<?php

namespace Database\Seeders;

use App\Models\TopicMessage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TopicMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TopicSeeder::class,
            TopicMessageAuthorSeeder::class
        ]);
        Schema::disableForeignKeyConstraints();
        TopicMessage::truncate();
        Schema::enableForeignKeyConstraints();
        TopicMessage::factory()->times(1000)->create();
    }
}
