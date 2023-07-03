<?php

namespace Database\Seeders;

use App\Models\TopicMessage;
use Illuminate\Database\Seeder;

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
        dump(__CLASS__.':'.__METHOD__);
    }
}
