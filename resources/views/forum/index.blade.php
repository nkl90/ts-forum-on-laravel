<x-layout.forum>
    <x-slot name="content">
        <h1>Главная страница форума</h1>
        <p class="lead">Добро пожаловать!</p>
        @each('forum.topic_list_row', $topics, 'topic')
    </x-slot>
</x-layout.forum>
