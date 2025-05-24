@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <ul>
      @foreach ($tasks as $task)
        <li>
          <a href="{{ route('tasks.show', $task->id) }}">
            {{ $task->title }}
          </a>
        </li>
      @endforeach
    </ul>
@endsection