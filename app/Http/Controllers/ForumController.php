<?php

declare(strict_types=1);


namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Faker\Factory;
use Carbon\Carbon;

class ForumController extends Controller
{
    private array $iconNames = [
        'folder_announce.gif', 'folder_big_3.gif', 'folder_games_1.svg',
        'folder_lock.gif', 'shopping_cart_1.svg',
    ];

    private array $userAvatars = [
        'no_avatar.png', '1.png', '2.png', '3.png', '4.png',
    ];

    public function showTopic(string $uuid, int $page = 1)
    {
        $faker = Factory::create();
        $perPage = 10;
        $currentDate = Carbon::now();
        $lastMessageDate = $currentDate;
        $messages = [];
        for ($i = 0; $i < 10; $i++) {
            $experienceYear = rand(1, 20);
            $experienceYearText = $experienceYear . ' ';

            if ($experienceYear >= 11 && $experienceYear <= 14) {
                $experienceYearText .= 'лет';
            } else {
                $lastDigit = $experienceYear % 10;
                if ($lastDigit === 1) {
                    $experienceYearText .= 'год';
                } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
                    $experienceYearText .= 'года';
                } else {
                    $experienceYearText .= 'лет';
                }
            }
            
            $randomDate = $lastMessageDate->copy()->addDays(rand(1, 362));
            $randomDate->addHours(rand(1, 24));
            $randomDate->addMinutes(rand(1, 60));
    
            $formattedDate = $randomDate->format('d-M-y H:i');
    
            $diff = $randomDate->diff($lastMessageDate);
            $diffString = '';
    
            if ($diff->y > 0) {
                $diffString = $diff->format('%y года, ');
            }
    
            if ($diff->m > 0 || $diff->d > 0 ||  $diff->h > 0) {
                $diffString .= $diff->format('%m месяца, %d дня, %h часов');
            }

            if ($i === 0) {
                $diffString = '';
                $text = '';
                $lastMessageDate = $currentDate;
            } else {
                $lastMessageDate = $randomDate;
                $text = 'спустя ';
            }

            $messages[] = [
                'login' => $faker->name(),
                'message' => $faker->text(),
                'avatar' => $this->userAvatars[rand(0, count($this->userAvatars) - 1)],
                'experience_year' => $experienceYearText,
                'experience_month' => rand(1, 12),
                'count_message' => rand(0, 9999),
                'date' => $formattedDate,
                'last_message' => $text . $diffString,
                'signature' => $faker->sentence()
            ];
            $lastMessageDate = $randomDate;
        }

        return view('forum.topic_show', [
            'uuid' => $uuid,
            'page' => $page,
            'messages' => $messages
        ]);
    }

    public function createTopic()
    {
        return view('forum.topic_create');
    }

    public function listTopics()
    {
        $faker = Factory::create();
        $topics = [];
        for ($i = 0; $i < 20; $i++) {
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
}
