<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Мировые Новости'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>


<!-- Основной заголовок -->
<header class="main-header">
    <div class="container">
        <div class="header-content">
            <div class="menu-toggle"></div>
            <div class="logo">
                <h1>Мировые Новости</h1>
            </div>
            <div class="header-actions">

                <div class="search-icon">🔍</div>
            </div>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="/" class="active">Главная</a></li>
                <li><a href="#">Мир</a></li>
                <li><a href="#">Политика</a></li>
                <li><a href="#">Экономика</a></li>
                <li><a href="#">Технологии</a></li>
                <li><a href="#">Наука</a></li>
                <li><a href="#">Здоровье</a></li>
                <li><a href="#">Культура</a></li>

                <li><a href="calc.php/">калькулятор</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
