@extends('main.layout.app')
@section('content')

@foreach ($posts as $post)
<div class="posts-container">
    <div class="post-details">
        @auth
            {{-- <div class="edit-delete-post-container">
                <a href="{{ route('posts.editPost',['id'=>1]) }} "><i class="fas fa-pen-square"></i></a>
                <a href="{{ route('posts.deletePost',['id'=>1]) }}"><i class="fas fa-trash-alt"></i></a>
            </div> --}}

            <div class="edit-delete-post-container">
                <form action="{{ route('posts.editPost',['id'=>1]) }}" method="delete">
                    @csrf
                    @method("DELETE")
                    <button type='submit'>delete</button>
                </form>
                <form action="{{ route('posts.editPost',['id'=>1]) }}" method="put">
                @csrf
                @method("PUT")
                <button type="submit">edit</button> 
                </form>
            </div>
        @endauth
        <div>
            <h1>Nom:<span>{{$post->name}}</span></h1>
            <h1>Description:<span>{{$post->body}}</span></h1>
            <h1>Source:<span>{{$post->source}}</span></h1>
        </div>
        @auth
        <div class="like-post-container"><a href="{{ route('posts.likePost', ['id'=>1]) }} "><i class="fas fa-thumbs-up"></i></a></div>
        @endauth
    </div>
</div>
@endforeach

@endsection