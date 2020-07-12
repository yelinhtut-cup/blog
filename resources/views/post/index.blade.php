
@extends('layouts.app2');
@section('content2')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description"> Add class <code>.table-striped</code> </p>
            <table class="table table-striped">
                <thead>

                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Author</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td class="py-1">
                        <img src="{{asset('storage/'.$post->image)}}" alt="image" /> </td>
                    <td><a href="/post/{{$post->id}}">{{$post->title}}</a></td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->author}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
