<x-layout.forum>
    <x-slot name="title">
        {{ $user->name }}
    </x-slot>
    <x-slot name="content">
        <div class="container">
            <h5>Профиль пользователя: {{ $user->name}}</h5>
            <br>
            <div class="message_divider">Профиль пользователя</div>
            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                <div class="p-3 col-4 border" style="text-align: center;">
                    <img class="avatar" src="https://placehold.co/100">
                    <p>Email: {{ $user->email }}</p>
                </div>
                <div class="p-3 col-8 border-bottom border-end" style="text-align: center;">
                    <div class="experience">
                        Стаж:
                    </div>
                    <div class="registered">
                        Зарегистрирован:
                    </div>
                    <div class="messages">
                        Сообщений:
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout.forum>