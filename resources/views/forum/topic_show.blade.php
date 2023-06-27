<x-layout.topic>
    <x-slot name="title"></x-slot>
    <x-slot name="content">
        <h1></h1>
        <p class="lead">Добро пожаловать!</p>
        <div>  
            <p>Cтраницы: 1,2,3,4,5,6 След.</p>
        </div>
        <div class="post row">
            <div class="col-md-2">
                <div class="poster_info">
                    <p class="nick">Ник</p>
                    <p class="rank_img">
                        <img src="">
                    </p>
                    <p class="avatar">
                        <img src="">
                    </p>
                    <p class="joined"><span>Стаж:</span> 18 лет 4 месяца</p>
                    <p class="posts"><span>Сообщений:</span> 5454</p>
                </div>
                <div class="poster_btn">
                    <a href="#">[Профиль]</a>
                    <a href="#">[ЛС]</a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="post-time">
                    <span class="">
                        <img src="https://static.rutracker.cc/templates/v1/images/icon_minipost.gif" class="icon1 hide-for-print" alt="">
                        <a href="#">Дата</a>
                    </span>
                    <span>
                        (5 лет назад, ред. 21-Май-22 08:40)
                    </span>
                    <a href="#">[Цитировать]</a>
                </div>
                <div class="post-message">
                    <p>Сообщение поста</p>
                </div>
            </div>
        </div>

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
