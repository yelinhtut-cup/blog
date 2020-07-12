<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Review</title>
</head>
<body>
<h1>My Review</h1>
<form action="/review" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><p></p>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address"><p></p>
    <label for="price">Price:</label>
    <input type="text" id="price" name="price">
    <input type="submit" value="Add">
</form>
</body>
</html>
