<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyTasks</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .container {
                max-width: 480px;
            }
        </style>
    </head>
    <body>
        <x-task-layout>
            <div>
                <form class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="keyword">
                    <button class="btn btn-outline-secondary" type="submit">絞り込み</button>
                </form>
            </div>
            <div class="text-end mb-3">
                <a href="/tasks/new" class="btn btn-light">タスクの追加</a>
            </div>
            <ul class="list-group list-group-flush">
                @foreach($tasks as $task)
                <li class="list-group-item">{{ $task->name }}</li>
                @endforeach
            </ul>
        </x-task-layout>
    </body>
</html>
