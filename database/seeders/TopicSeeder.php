<?php

namespace Database\Seeders;

use App\Models\Topic;
use Database\Factories\TopicFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Topic::truncate();
        Schema::enableForeignKeyConstraints();
        Topic::factory(50)->create();
    }
}
