<div class="row mb-3">
    <div class="col-2">
        <a href="/forum/profile/{{ $message->author->user->id}}">{{ $message->author->user->name }}</a><br>
        <img class="avatar" src="https://placehold.co/100"><br>
        Стаж: {{ str_replace(' назад', '', Carbon\Carbon::parse($message->author->created_at)->diffForHumans()) }}<br>
        Сообщений: {{ $message->author->messages->count() }}<br>
    </div>
    <div class="col-10">
      <div class="row">
            <div class="col">{{ $message->created_at }} ({{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }})</div>
      </div>
      {{ $message->content }}
    </div>
</div>
