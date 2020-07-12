{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Show</title>--}}
{{--</head>--}}
{{--<body>--}}
@extends('layouts.app2');
@section('content2')
<h1>Post Detatils</h1>
Title:{{$post->title}}<p></p>
Content:{{$post->content}}<p></p>
Author:{{$post->author}}<p></p>
Image:<img src="{{asset('storage/'.$post->image)}}">

<form action="/post/{{$post->id}}" id="delete-task" method="post">
    @csrf
    @method('DELETE')
</form>
<a href="/post/{{$post->id}}/edit" ><button> Update </button></a>

<button type="submit" form="delete-task">Delete</button>
@endsection
{{--</body>--}}
{{--</html>--}}
