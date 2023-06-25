<x-layout.forum>
    <x-slot name="title">Главная страница форума</x-slot>
    <x-slot name="content">
        <h1>Главная страница форума</h1>
        <p class="lead">Добро пожаловать!</p>
        <div class="message_divider col-12"></div>
        @each('forum.topic_list_row', $topics, 'topic')
    </x-slot>
</x-layout.forum>
