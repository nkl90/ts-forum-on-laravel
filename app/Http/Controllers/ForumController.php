<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\TopicMessage;
use App\Models\TopicMessageAuthor;
use Illuminate\Support\Facades\View;
use Faker\Factory;
use App\Models\User;

class ForumController extends Controller
{
    private array $iconNames = [
        'folder_announce.gif', 'folder_big_3.gif', 'folder_games_1.svg',
        'folder_lock.gif', 'shopping_cart_1.svg',
    ];
    private array $avatarNames = [
        'avatar_1.jpg', 'avatar_2.jpg', 'avatar_3.jpg',
        'avatar_4.png', 'avatar_5.jpg',
    ];
    public function showTopic(string $uuid, int $page = 1)
    {
        /** @var Topic|null $topic */
        $topic = Topic::query()->where('id', $uuid)->first();
        if(!$topic) {
            abort(404);
        }
        return view('forum.topic_show', ['topic' => $topic]);
    }

    public function createTopic()
    {
        return view('forum.topic_create');
    }

    public function listTopics()
    {
//        $faker = Factory::create();
//        $topics = [];
//        for($i = 0; $i < 20; $i++) {
//            $topics[] = [
//                'uuid' => $faker->uuid(), // '476ea7d2-7256-49ca-9e53-375b42879018
//                'title' => $faker->sentence(),
//                'created_at' => $faker
//                    ->dateTimeBetween('-1 year', 'now')
//                    ->format('Y-m-d'),
//                'pages_count' => rand(1, 10),
//                'icon' => $this->iconNames[rand(0, count($this->iconNames) - 1)],
//            ];
//        }

        $topics = Topic::query()->paginate(10);
        if($topics->currentPage() > $topics->lastPage()) {
            abort(404);
        }

        return view('forum.index', ['topics' => $topics]);
    }

    public function profileUser($id) 
    {
        $user = User::find($id);
        return view('forum.profile_show', compact('user'));
    }

}
