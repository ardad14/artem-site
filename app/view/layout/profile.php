<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>Personal blog</title>
</head>
<body>
    <div class="header">
        <h1 class="title">PersonalBlog</h1>
        <div class="menu">
            <a href="" class="menu_item selected">Мой профиль</a>
            <a href="" class="menu_item">Рекомендации</a>
            <a href="" class="menu_item">Настройки</a>
        </div>
    </div>
    <div class="body">
        <div class="up">
            <p class="name">Название блога</p>
            <div class="views">
                <p class="looks">
                    <?php echo $template ?>
                </p>
                <img src="img/eye.png" alt="" class="icon">
            </div>s
        </div>
    </div>

</body>
</html>