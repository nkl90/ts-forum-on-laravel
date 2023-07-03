<div class="post row">
    <div class="col-md-2">
        <div class="poster_info">
            <p class="nick">{{ $message['nick'] }}</p>
            <p class="avatar">
                <img src="/forum/avatar/{{ $message['avatar']}}">
            </p>
            <p class="joined"><span>Стаж:</span> {{ $message['joined'] }}</p>
            <p class="posts"><span>Сообщений:</span> {{ $message['messagesCount'] }}</p>
        </div>
        <div class="poster_btn">
            <a href="#">[Профиль]</a>
            <a href="#">[ЛС]</a>
        </div>
    </div>
    <div class="col-md-10">
        <div class="post-time">
            <p>
                <span class="">
                    <img src="https://static.rutracker.cc/templates/v1/images/icon_minipost.gif" class="icon1 hide-for-print" alt="">
                    <a href="#">{{ $message['post-time'] }}</a>
                </span>
                <span>
                    (5 лет назад, ред. )
                </span>
            </p>
            <a href="#">[Цитировать]</a>
        </div>
        <div class="post-message">
            <p>{{ $message['message'] }}</p>
        </div>
    </div>
</div>