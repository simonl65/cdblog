<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show task id {{$task->id}}</title>
</head>
<body>
    <h1>{{ $task->body }}</h1>
    <a class="btn btn-success" href="/tasks">Tasks</a>
</body>
</html>
