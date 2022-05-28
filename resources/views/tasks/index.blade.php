<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    @foreach($tasks as $task)
        <li>
            <a href="tasks/{{$task->id}}">
                {{$task->body}}
            </a>
            @foreach($main_block as $img => $item)
                <div class="col-12 my-2">
                    <a class="">
                        <p>{{$img}}</p>
                        {{$item}}
                    </a>
                </div>
            @endforeach
        </li>
    @endforeach
</ul>
</body>
</html>
