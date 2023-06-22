<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Какой-то портал</title>
</head>
<body>
    <h1>Главная страница портала</h1>
    <div>{{ $title }}</div>
    <div>Рандом равен {{ $random }}</div>
    <footer>@env(['dev', 'testing']) {{ date('Y-m-d H:i:s') }} - {{ $commit_hash }} @endenv</footer>
</body>
</html>
