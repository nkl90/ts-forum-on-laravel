<x-layout.topic>
    <x-slot name="title">{{ 'topic' }}</x-slot>
    <x-slot name="content">
        <h1>{{ 'topic' }}</h1>
        <p class="lead">Добро пожаловать!</p>
        @each('forum.topic_list_row', $topics, 'topic')
    </x-slot>
</x-layout.topic>



<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Forum</title>
</head>
<body>
    <h1>Топик № {{ $uuid }} @isset ($page), страница {{ $page }} @endisset</h1>
</body>
</html> -->
