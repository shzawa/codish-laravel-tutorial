<x-task-layout>
    <div>
        <h2 class="h4">タスクの追加</h2>
    </div>
    <div class="mb-3">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">タスク名</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">日付</label>
                <input type="date" class="form-control" name="date_on">
            </div>
            <div class="mb-3">
                <label class="form-label">詳細</label>
                <textarea class="form-control" name="body" rows="5"></textarea>
            </div>
            <input type="submit" class="btn btn-light" value="タスクの追加">
        </form>
    </div>
</x-task-layout>