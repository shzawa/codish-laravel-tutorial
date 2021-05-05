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
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="keyword">
                    <button class="btn btn-outline-secondary" type="button">絞り込み</button>
                </div>
            </div>
            <div class="text-end mb-3">
                <a href="/tasks/new" class="btn btn-light">タスクの追加</a>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </x-task-layout>
    </body>
</html>
