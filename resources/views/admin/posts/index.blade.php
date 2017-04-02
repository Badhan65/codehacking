@extends('layouts.admin')

@section('content-header')
     Post
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>Photo</th>
            <th>User Id</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Create at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
        <tr>

                <td>{{$post->id}}</td>
                <td><img height="70"  src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/100x100'}}" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : 'uncategories'}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForhumans()}}</td>

        </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection