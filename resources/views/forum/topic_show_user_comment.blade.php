<div class="row mb-3">
    <div class="col-2">
        <a href="#">{{ $topic['name'] }}</a><br>
        <img class="avatar" src="/forum/avatars/{{ $topic['avatar'] }}"><br>
        Стаж: {{ str_replace(' назад', '', Carbon\Carbon::parse($topic['experience'])->diffForHumans()) }}<br>
        Сообщений: {{ $topic['number_of_messages'] }}<br>
    </div>
    <div class="col-10">
      <div class="row">
            <div class="col">{{ $topic['date_of_publication'] }} ({{ Carbon\Carbon::parse($topic['date_of_publication'])->diffForHumans() }})</div>
      </div>
      {{ $topic['text'] }}
    </div>
</div>