<?php
declare(strict_types=1);


namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        dump(__CLASS__.':'.__METHOD__);
        User::factory(1000)->create();
    }
}
