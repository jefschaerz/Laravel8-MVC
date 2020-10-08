
@extends('layout')

@section('content')
<h1>Task list</h1>

<a href="{{ route('tasks.create') }}" class="btn">New task</a>

<table class="striped highlight">
  <thead>
    <tr>
      <th class="px-4 py-2">Id</th>
      <th class="px-4 py-2">Name</th>
      <th class="px-4 py-2">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td><a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn left">Show</a></td>
            <td><form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                @csrf
                @method('DELETE')
                <button class="btn waves-effect waves-light red left" type="submit" name="actions">Delete task</button>
            </form></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
