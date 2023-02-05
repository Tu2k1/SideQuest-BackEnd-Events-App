
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    <ul>
        @foreach (json_decode($events) as $event )
            <li> {{$event->title}} | {{$event->category}} | {{$event->date}} </li>
        @endforeach
    </ul>
</body>
</html>
