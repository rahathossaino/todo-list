@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.update',$task->id) }}">
        @csrf
        @method('PUT')
        <div class="input-field">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required value="{{ $task->title }}">
        </div>
        <div class="input-field">
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
