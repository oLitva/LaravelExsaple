<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="logo-header">Laravel</h1>
            <a href="/" class="main-menu">Главная</a>
            <a href="/array-page" class="array-menu">Массивы</a>
        </div>
        <div class="content">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, sint.</h1>
            <div class="card-container">
                @foreach($array as $item)
                    <h3 class="card-title">{{$item['title']}}</h3>
                    <p class="card-price">{{$item['price']}}</p>
                    <img src="{{Vite::asset('resources/images/'.$item['path'])}}" alt="" class="card-img">
                @endforeach
            </div>
        </div>
        <div class="header">
            <h1>©</h1>
            <h2>Литвин Никита Павлович</h2>
            <h2>2026</h2>
        </div>
    </div>
</body>
</html>