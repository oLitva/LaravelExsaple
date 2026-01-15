<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая страница</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <h1>Первая страница</h1>

    <?php echo e($a. $b); ?>


    <?php if($a%2 == 0): ?>
        <p>Число четное</p>
    <?php else: ?>
        <p>Число NOT четное</p>
    <?php endif; ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\litvin-app\resources\views/first.blade.php ENDPATH**/ ?>