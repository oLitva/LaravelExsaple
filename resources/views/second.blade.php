<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <h1>Вторая страница</h1>
    @foreach($users as $user)
        <div>
            <p>Это пользователь № {{$user->id}} Имя: {{$user->name}}</p>

        </div>
    @endforeach

</body>
</html>