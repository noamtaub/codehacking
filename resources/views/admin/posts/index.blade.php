@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Owner</th>
          <th scope="col">Category</th>
          <th scope="col">Photo</th>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>

      @if($posts)
          @foreach($posts as $post)
              <tr>
                  <th>{{$post->id}}</th>
                  <th>{{$post->user->name}}</th>
                  <th>{{$post->category->name}}</th>
                  <th><img height="50" src="{{$post->photo? $post->photo->path : "https://via.placeholder.com/150"}}" alt=""></th>
                  <th>{{$post->title}}</th>
                  <th>{{$post->body}}</th>
                  <th>{{$post->created_at->diffForHumans()}}</th>
                  <th>{{$post->updated_at}}</th>
              </tr>
              @endforeach
          @endif

      </tbody>
    </table>
    @endsection