<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Home</title>
</head>
<body>
<h1>My test HOme</h1>
<form action="/test" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><p></p>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><p></p>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password"><p></p>
    <input type="submit" value="ADD">

</form>
</body>
</html>
