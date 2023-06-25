<x-layout.forum>
    <x-slot name="title">Топик № {{ $uuid }}</x-slot>
    <x-slot name="content">
        <h2>Топик № {{ $uuid }}</h2>
        <p>Страницы: @isset($page) {{ $page }} @endisset</p>
        <div class="message_divider col-md-12"></div>
        @each('forum.topic_message', $messages, 'message')
        <div class="mb-3" style="display: flex; flex-direction: column; align-items: center; margin-top: 15px;">
            <label class="form-label"><b>Оставить сообщение:</b></label>
            <textarea class="form-control"  rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary" style="display: block; margin: 0 auto;">Отправить</button> 
    </x-slot>
</x-layout.forum>