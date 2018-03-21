@extends('layouts.app') 
@section('content')
  <div class="well">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Todo</h1>
          <form method="POST" action="{{ route('todo/create') }}">
            {{ csrf_field() }}
            <div class="input-group">
              <input type="text" class="form-control" name="task" placeholder="add todo">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">add</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <ul class="list-group">
          @foreach($tasks as $task)
          <li class="list-group-item @if($task->status) text-primary @endif" onClick="location.href='{{ route('todo/update', ['id' => $task->id]) }}'">
            {{ $task->content }}
            <a href="{{ route('todo/delete', ['id' => $task->id]) }}" class="close">X</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection