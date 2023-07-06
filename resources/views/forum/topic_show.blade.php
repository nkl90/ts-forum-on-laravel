<x-layout.forum>
    <x-slot name="title">
        {{ $topic->title }}
    </x-slot>
    <x-slot name="content">
        <h1 class="mb-3">{{ $topic->title }}</h1>
        <div class="container">
            @each ('forum.topic_show_user_comment', $topic->messages, 'message')

            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end">
                    <span>Страница:</span>
                    {{-- @each ('forum.topic_show_pagination', $topic->messages, 'topic') --}}
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-12">
                    <form action="{{ route('app.topic-message.create.process', ['UUID' => $topic->id]) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="author">Выберите автора сообщения:</label>
                            <select id="author" name="author_id">
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->user->name }} ({{ $author->user->email }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label mt-3">Сообщение:</label>
                            @if($errors->has('message'))
                                <div class="alert-danger">{{ $errors->first('message') }}</div>
                            @endif
                            <textarea class="form-control" id="message" name="message" rows="5">{{ old("message") }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout.forum>
