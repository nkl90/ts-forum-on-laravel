<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\TopicMessage;
use App\Models\TopicMessageAuthor;
use Illuminate\Support\Facades\View;
use Faker\Factory;
use Symfony\Component\HttpFoundation\Request;

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
        $topicAuthors = TopicMessageAuthor::all();
        return view('forum.topic_show', [
            'topic' => $topic,
            'authors' => $topicAuthors
        ]);
    }

    public function createTopic()
    {
        return view('forum.topic_create');
    }

    public function listTopics()
    {
        $topics = Topic::query()->paginate(10);
        if($topics->currentPage() > $topics->lastPage()) {
            abort(404);
        }

        return view('forum.index', ['topics' => $topics]);
    }

    public function showAuthorPage(integer $authorId)
    {
        return view('forum.user_profile_page');
    }

}
