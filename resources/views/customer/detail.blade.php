<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Detail</title>
</head>
<body>
<h1>Customer Detail</h1>
Name:{{$customer->name}}
Email:{{$customer->email}}
Password:{{$customer->password}}
<a href="/customer/edit/{{$customer->id}}">
    <button>Update</button>
</a>
<a href="/customer/delete/{{$customer->id}}">
    <button onclick="del({{$customer->id}})">Delete</button>
</a>
<script>
    function del(id) {
        let con=confirm("Are you sure to delete");
        if(con){
            location.href='customer/delete';
        }
    }
</script>
</body>
</html>
