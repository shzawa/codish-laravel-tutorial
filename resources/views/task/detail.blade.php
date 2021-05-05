<x-task-layout>
    <div>
        <h2 class="h4">タスクの詳細</h2>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <label class="form-label">タスク名</label>
            <span>{{ $task->name }}</span>
        </div>
        <div class="mb-3">
            <label class="form-label">日付</label>
            <span>{{ $task->date_on }}</span>
        </div>
        <div class="mb-3">
            <label class="form-label">詳細</label>
            <p>{{ $task->body }}</p>
        </div>
    </div>
</x-task-layout>
