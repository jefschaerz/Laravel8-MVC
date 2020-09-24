Tasks list dans vue index

<ul>
@foreach($tasks as $task)
<!-- Create link using a named route (dispo et visible avec "artisan route:list") -->
<li><a href="{{ route('tasks.show', ['task' => $task['id']]) }}">#{{ $task['id'] }} - {{ $task['name'] }}</a></li>
@endforeach
</ul>
