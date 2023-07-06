<x-layout.forum>
    <x-slot name="title"></x-slot>
    <x-slot name="content">
        <h1></h1>
        <p class="lead">Добро пожаловать!</p>
        <div class="pagination row">  
            <p>Cтраницы: 1,2,3,4,5,6 След.</p>
        </div>
        @each('forum.topic_message_list', $messages, 'message')
        <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end">
                    <span>Страница:</span>
                    {{-- @each ('forum.topic_show_pagination', $topic->messages, 'topic') --}}
                </div>
            </div>
        <div>
        </div>
    </x-slot>
</x-layout.forum>