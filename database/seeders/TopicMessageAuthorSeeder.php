<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopicMessageAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dump(__CLASS__.':'.__METHOD__);
        $this->call([
            UserSeeder::class
        ]);

    }
}
