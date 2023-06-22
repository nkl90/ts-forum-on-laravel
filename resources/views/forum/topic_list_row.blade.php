<div class="row mb-3">
    <div class="col-md-1 themed-grid-col">
        <img class="icon" src="/forum/icons/{{ $topic['icon'] }}">
    </div>
    <div class="col-md-9 themed-grid-col">
        <a href="{{ route('app.topic.show', ['UUID' => $topic['uuid']]) }}">
            {{ $topic['title'] }}
        </a>
    </div>
    <div class="col-md-2 themed-grid-col">
        <a href="{{ route('app.topic.show.page', ['UUID' => $topic['uuid'], 'page' => $topic['pages_count']]) }}">
            {{ $topic['created_at'] }}
        </a>
    </div>
</div>
