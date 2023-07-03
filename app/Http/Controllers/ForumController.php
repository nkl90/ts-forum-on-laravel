<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Faker\Factory;
class ForumController extends Controller
{
    private array $iconNames = [
        'folder_announce.gif', 'folder_big_3.gif', 'folder_games_1.svg',
        'folder_lock.gif', 'shopping_cart_1.svg',
    ];
    private array $avatarNames = [
        '1396559.gif', '10682549.jpg', '10703243.png', '11188810.jpg', '30902917.gif', '32740967.jpg', '41882836.jpg'
    ];

    public function createTopic()
    {
        return view('forum.topic_create');
    }

    public function listTopics()
    {
        $faker = Factory::create();
        $topics = [];
        for($i = 0; $i < 20; $i++) {
            $topics[] = [
                'uuid' => $faker->uuid(), // '476ea7d2-7256-49ca-9e53-375b42879018
                'title' => $faker->sentence(),
                'created_at' => $faker
                    ->dateTimeBetween('-1 year', 'now')
                    ->format('Y-m-d'),
                'pages_count' => rand(1, 10),
                'icon' => $this->iconNames[rand(0, count($this->iconNames) - 1)],
            ];
        }
        return view('forum.index', ['topics' => $topics]);
    }

    private function listUsers()
    {
        $faker = Factory::create();
        $users = [];
        for ($i = 0; $i < (count($this->avatarNames)); $i++) {
            $users[] = [
                'nick' => $faker->name(),
                'avatar' => $this->avatarNames[$i],
                'joined' => '14 лет 3 месяца',
                'messagesCount' => rand(1, 1000),
                'post-time' => $faker
                    ->dateTimeBetween('-5 years', 'now')
                    ->format('d-M-y H:i')б
                'signature' => $faker->sentence(rand(5, 30)),
            ];
        }
        return $users;
    }

    private function listMessages()
    {
        $faker = Factory::create();
        $users = $this->listUsers();
        $messages = [];
        for($i = 0; $i < 20; $i++) {
            $user = rand(0, count($users) - 1);
            $messages[] = [
                'nick' => $users[$user]['nick'],
                'avatar' => $users[$user]['avatar'],
                'joined' => $users[$user]['joined'],
                'messagesCount' => $users[$user]['messagesCount'],
                'post-time' => $users[$user]['post-time'],
                'message' => $faker->sentence(rand(20, 100)),
            ];
        } 
        
        return $messages;
    }


    public function showTopic(string $uuid, int $page = 1)
    {
        $messages = $this->listMessages();

        return view('forum.topic_show', [
            'uuid' => $uuid,
            'page' => $page,
            'messages' => $messages
        ]);
    }

}
