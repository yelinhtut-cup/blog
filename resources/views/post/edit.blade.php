{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Edit</title>--}}
{{--</head>--}}
{{--<body>--}}
@extends('layouts.app2');
@section('content2')
<h1>Edit Page</h1>
<form action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf

    @include('post.form')
{{--    <input type="submit" value="add">--}}
</form>
@endsection
{{--</body>--}}
{{--</html>--}}
