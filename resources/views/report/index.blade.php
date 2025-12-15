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
            <a href="{{ route('reports.create') }}">Создать</a>
            <div class="menu-list">
                <a href="#">Выйти</a>
            </div>
        </div>
    </header>
    <main>
        @foreach ($reports as $report)
        <div>
            <tr>
                <th>
                    {{$report->number}}
                </th>
                <td>
                    {{$report->description}}
                </td>
                <td>
                    {{$report->created_at->format('d.m.Y H:i')}}
                </td>
            </tr>
            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                @method('delete')
                @csrf
                <input type="submit" value="Удалить">
            </form>
            <a href="{{route('reports.edit', $report->id)}}">Редактировать</a>
            <hr>
        </div>
        @endforeach
    </main>
    
    <footer>

    </footer>
</body>
</html>