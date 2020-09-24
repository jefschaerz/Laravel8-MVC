Tasks list dans vue index

<ul>
@foreach($tasks as $task)
<li><a href="{{ route('tasks.show', ['task' => $task['id']]) }}">#{{ $task['id'] }} - {{ $task['name'] }}</li>
@endforeach
</ul>
