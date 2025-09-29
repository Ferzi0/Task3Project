<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <img src="{{ Vite::asset('/resources/img/narusheniynet.svg') }}">
        <div class="user-menu">
            <div class="user-name">
                Торгашов Эдуард
            </div>
            <div class="menu-list">
                <a href="#">Выйти</a>
            </div>
        </div>
    </header>
    <main>

    </main>
    
    <footer>

    </footer>
</body>
</html>