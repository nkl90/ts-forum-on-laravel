<x-layout.forum>
    <x-slot name="title">
        {{ $author->user->name }}
    </x-slot>
    <x-slot name="content">
        <div class="container">
            <h5>Профиль пользователя: {{ $author->user->name}}</h5>
            <br>
            <div class="message_divider">Профиль пользователя</div>
            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                <div class="p-3 col-4 border" style="text-align: center;">
                    <img class="avatar" src="https://placehold.co/100">
                    <p>Email: {{ $author->user->email }}</p>
                </div>
                <div class="p-3 col-8 border-bottom border-end" style="text-align: center;">
                    <div class="experience">
                        Стаж: {{ now()->diffForHumans($author->user->created_at) }}
                    </div>
                    <div class="registered">
                        Зарегистрирован: {{ $author->user->created_at }}
                    </div>
                    <div class="messages">
                        Сообщений: {{ $author->messages->count() }}
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout.forum>
