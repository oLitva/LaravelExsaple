<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
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
                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h3 class="card-title"><?php echo e($item['title']); ?></h3>
                    <p class="card-price"><?php echo e($item['price']); ?></p>
                    <img src="<?php echo e(Vite::asset('resources/images/'.$item['path'])); ?>" alt="" class="card-img">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="header">
            <h1>©</h1>
            <h2>Литвин Никита Павлович</h2>
            <h2>2026</h2>
        </div>
    </div>
</body>
</html><?php /**PATH D:\xampp\htdocs\litvin-app\resources\views/array.blade.php ENDPATH**/ ?>