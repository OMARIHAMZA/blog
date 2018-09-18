<html>
<head>
    <title>Tasks</title>
</head>
<body>
<h1>Tasks</h1>
<h3>Your Tasks</h3>
<ul>
    @foreach($tasks as $task)
        <li>
            <a href="/tasks/{{$task->id}}">{{$task -> body}}</a>
        </li>
    @endforeach
</ul>
</body>
</html>