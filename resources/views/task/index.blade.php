@extends('layouts.app')

@section('content')
    <div class="index-top">
        <h1>To-Do List</h1>
        <a href="{{ route('tasks.create') }}" class="text-decoration">Create Task</a>
    </div>
    <table>
    @if($tasks->isNotEmpty())
        <tr>
            <th>Title</th>
            <th>status</th>
            <th>action</th>
        </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td >
                        <a href="{{ route('tasks.status',['id'=>$task->id]) }}" class="{{ $task->status === 1 ? 'status-completed text-decoration' : 'status-incomplete text-decoration' }}">{{ $task->status===1 ? 'Completed' : 'Incomplete' }}</a>
                    </td>
                    <td class="action">
                        <a href="{{ route('tasks.show', $task->id) }}" class="button">view</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="button">Edit</a>
                        <form action="{{ route('tasks.destroy',$task->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <p>Task list is empty</p>    
        @endif
    </table>

@endsection
