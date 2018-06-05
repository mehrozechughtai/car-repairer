@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <main role="main" class="col-sm-12 ml-sm-auto col-md-12 pt-3">
                <h4><strong>Problem: </strong>{{ $post->problem }}</h4><hr>
                
                    <h4><strong>Description: </strong>{{ $post->description }}</h4><br>

                    @if(Auth::user()->id == $post->user)
                        <a href="{{ route('post.edit', ['id' => $post->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm">Edit Post</button>
                        </a>
                        <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
                        </a>
                    @endif
            </main>
        </div>
    </div>
@endsection