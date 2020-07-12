
@extends('layouts.app2');
@section('content2')
    <style>
        .error{color: red;}
    </style>
{{--</head>--}}
{{--<body>--}}
<H1>Post</H1>
<form action="/post" method="post" enctype="multipart/form-data">
    @csrf
    @include('post.form');
</form>
    @endsection
{{--</body>--}}
{{--</html>--}}
