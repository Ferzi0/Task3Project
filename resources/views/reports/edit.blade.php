<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование заявки</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <div>
            <h1>Редактирование заявки</h1>
            
            <form action="{{ route('reports.update', $report->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('put')
                
                <div>
                    <label>Номер заявки</label>
                    <input type="text" name="number" value="{{ $report->number }}"  required autofocus>
                </div>
                <div>
                    <label>Описание</label>
                    <textarea name="description" rows="6" required autofocus></textarea>
                </div>
                
                <div>
                    <button type="submit">
                        Сохранить
                    </button>
                    <a href="{{ route('reports.index', $report->id) }}">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>