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
            <div class="content-image">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iusto error dolores unde. Aliquam laborum quas blanditiis laudantium perferendis id eum eos modi! Impedit ea quis dolor. Ab sequi accusamus vitae modi ad similique dignissimos odio, magni molestiae, ipsam ex repudiandae aperiam iste. Ratione aut temporibus sed ut minus odio, beatae nulla quo, quaerat mollitia obcaecati omnis! Explicabo nobis, reprehenderit impedit ex ipsum, eos perferendis voluptatum assumenda quisquam maiores odio!</p>
                <img src="{{ Vite::asset('resources/images/two.jpg') }}" width="500px">
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