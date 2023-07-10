<x-layout.forum>
    <x-slot name="title">
        Профиль пользователя: {{ $topic->author }}
    </x-slot>
    <x-slot name="content">
        <h1 class="mb-3">Профиль пользователя: {{ $topic->author }}</h1>
        <div class="container">
            @each ('forum.topic_show_user_comment', $topic->messages, 'message')

            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end">

                </div>
            </div>
        </div>
    </x-slot>
</x-layout.forum>