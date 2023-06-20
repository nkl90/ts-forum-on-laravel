<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ForumController extends Controller
{
    public function showTopic(string $uuid, int $page = 1)
    {
        return view('forum.topic_show', [
            'uuid' => $uuid,
            'page' => $page
        ]);
    }

    public function createTopic()
    {
        return view('forum.topic_create');
    }

}
