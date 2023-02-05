
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Form</title>
</head>
<body>
    <form action="store" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category"><br>
        <label for="date">Date:</label><br>
        <input type="text" id="date" name="date"><br>
        <input type="submit" value="Submit"><br>
      </form>
</body>
</html>
