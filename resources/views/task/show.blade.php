@extends('layouts.app')

@section('content')
    <a href="{{ route('tasks.index') }}">List</a>
    <p>ID: {{ $task->id }}</p>
    <p>Title: {{ $task->title }}</p>
    <p>Description: {{ $task->description }}</p>
    <p class="{{ $task->status === 1 ? 'status-completed' : 'status-incomplete' }}">Status: {{ $task->status === 1 ? 'Completed' : 'Incomplete' }}</p>
    
@endsection
