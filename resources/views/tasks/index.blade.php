<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>

    <a href="/" class="btn btn-primamry">Home</a>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{$task->id}}">{{$task->body}}</a></li>
        @endforeach
    </ul>

</body>
</html>
