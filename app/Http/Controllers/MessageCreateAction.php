<?php
declare(strict_types=1);


namespace App\Http\Controllers;

use App\Http\Requests\CreateTopicMessageRequest;
use App\Models\TopicMessage;
use Illuminate\Http\RedirectResponse;

class MessageCreateAction
{
    public function __invoke(CreateTopicMessageRequest $request, $topicId): RedirectResponse
    {
        $request->validate($request->rules());
        TopicMessage::create([
            'topic_id' => $topicId,
            'author_id' => $request->author_id,
            'content' => $request->message,
        ]);
        return redirect()->route('app.topic.show', ['UUID' => $topicId]);
    }
}
