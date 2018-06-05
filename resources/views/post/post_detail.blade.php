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

        <h2 style="margin-top: 3%;">Comments</h2><hr>

        <div class="row">
            <div class="col-md-8 col-md-offset-2" >
                @foreach($post->comments as $comment)
                    <div class="comment">
                        <p><strong>Name: </strong>{{ $comment->name }}</p>
                        <p><strong>Comment: </strong>{{ $comment->comment }}</p>
                    </div>
                    <hr>
                @endforeach
            </div>


        </div>


        <div class="row">
            <main role="main" class="col-sm-12 ml-sm-auto col-md-12 pt-3">
                <div id="comment-form" class="col-sm-8 col-md-offset-2" style="margin-top: 20px;">
                    {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST' ]) }}

                        <div class="row">
                            <div class="col-md-6">
                                {{ Form::label('name', "Name:") }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                             <div class="col-md-6">
                                {{ Form::label('email', "Email:") }}
                                {{ Form::text('email', null, ['class' => 'form-control']) }}
                            </div>
                             <div class="col-md-12">
                                {{ Form::label('comment', "Suggestion:") }}
                                {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                                {{ Form::submit('Add Suggestion',['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                            </div>

                        </div>


                    {{ Form::close() }}
                </div>
            </main>


        </div>
    </div>
@endsection