<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Первая страница</h1>

    {{$a. $b}}

    @if($a%2 == 0)
        <p>Число четное</p>
    @else
        <p>Число NOT четное</p>
    @endif
</body>
</html>