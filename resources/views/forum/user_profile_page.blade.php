<x-layout.forum>
    <x-slot name="title">
        Профиль пользователя: 
    </x-slot>
    <x-slot name="content">
        <h1 class="mb-3 profile">Профиль пользователя: {{ $user->name }} </h1>
        <a href="/forum" class="home-link">Главная</a>
        <div class="container profile">
            <div class="row header">
                Профиль пользователя
            </div>
            <div class="row body">
                <div class="col-sm-4">
                    <p>Аватар: нет</p>
                    <img src="../icons/hraniteli.gif" alt="">
                    <p>Звание: <strong>Хранитель</strong>
                    <p class="contact-header">Контакты</p>
                    <p><span>Посл. активность:</span> {{$user->updated_at}}</p>
                    <p><span>Личное сообщ.:</span>
                        <a href="">Отправить</a>
                        <a href="">Вход</a>
                        <a href="">Отправл.</a>
                </p>
                </div>
                <div class="col-sm-8">
                    <p><span>Стаж:</span> {{ str_replace(' назад', '', Carbon\Carbon::parse($user->created_at)->diffForHumans()) }}</p>
                    <p><span>Зарегистрирован:</span> {{$user->created_at}}</p>
                    <p><span>Сообщения:</span>
                        <a href=""> 29 сообщений</a>
                        <a href=""> Ответы</a>
                        <a href=""> Начатые темы</a>
                        <a href=""> Ответы в начатых темах</a>
                    </p>
                    <p><span>Откуда:</span> <img src="../icons/89.gif"></p>
                    <p><span>Статистика отданного:</span> [ <a href="">Показать</a>]</p>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout.forum>