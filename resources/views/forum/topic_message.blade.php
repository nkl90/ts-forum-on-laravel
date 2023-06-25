<div class="row message border">
    <div class="col-md-2 border-end">
        <div class="wrapper_user">
            <div class="login"><a class="login_link" href="/forum">{{ $message['login'] }}</a></div>
            <div class="avatars"><img class="avatar" src="/forum/avatars/{{ $message['avatar'] }}"></div>
            <div class="experience">Стаж: {{ $message['experience_year'] }} {{ $message['experience_month'] }} месяцев</div>
            <div class="count_message">Сообщений: {{ $message['count_message'] }}</div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="wrapper_user">
            <div class="date_message border-bottom"><img class="avatars" style="height: 12px;" src="/forum/message_icon/icon_minipost.gif">
            {{ $message['date'] }} {{ $message['last_message'] }}</div>
            <div class="message">{{ $message['message'] }}</div>
            <div class="signature border-top">{{ $message['signature'] }}</div>
        </div>
    </div>
</div>