<li style="display: flex; justify-content: space-between; align-items: center;">
    @if (session('edit_task_index') != null && session('edit_task_index') == $index)
        <form action="{{ route('save_task') }}" method="post" class="edit-form" style="flex-grow: 1; margin-right: 10px;">
            @csrf
            <input type="hidden" name="task_index" value="{{ $index }}">
            <input type="text" name="task" value="{{ $task }}" style="flex-grow: 1; padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
            <x-button type="submit" icon="save" iconClass="save-icon" style="color: black;" />
        </form>
        <form action="{{ route('cancel_edit') }}" method="post" style="display:inline;">
            @csrf
            <x-button type="submit" icon="cancel" iconClass="cancel-icon" style="color: red;" />
        </form>
    @else
        <span class="task-text">{{ $task }}</span>
        <div class="icon-buttons" style="display: flex; gap: 10px;">
            <form action="{{ route('edit_task') }}" method="post" style="display:inline;">
                @csrf
                <input type="hidden" name="task_index" value="{{ $index }}">
                <x-button type="submit" icon="edit" iconClass="edit-icon" />
            </form>
            <form action="{{ route('delete_task') }}" method="post" style="display:inline;">
                @csrf
                <input type="hidden" name="task_index" value="{{ $index }}">
                <x-button type="submit" icon="delete" iconClass="delete-icon" style="color: red;" />
            </form>
        </div>
    @endif
</li>