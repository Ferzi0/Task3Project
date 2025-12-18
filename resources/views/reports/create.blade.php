<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать заявление</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
<x-app-layout>
    <div>
        <h1>Создание заявления</h1>
        <form action="{{route('reports.store') }}" method="POST"> 
            @csrf
            <div>
                <label>Номер машины</label>
                <input type="text" name="number" placeholder="Введите номер" >
            </div>
                
            <div>
                <label>Описание нарушения</label>
                <textarea name="description" rows="6" placeholder="Опишите нарушение ПДД"></textarea>
            </div>
                
            <div>
                <button type="submit">
                    Создать заявку
                </button>
                <a href="{{route('reports.index')}}">
                    Отмена
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
</body>
</html>