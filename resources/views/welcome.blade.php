<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        New Lesson TO-DO
    </h2>
    

    <form action="{{route('saveTodo')}}" method="post">
        @csrf
        <input type="text" name="todo">
        <button type="submit">Save</button>
    </form>
</body>
</html>