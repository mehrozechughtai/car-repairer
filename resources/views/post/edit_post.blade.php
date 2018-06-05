@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
           <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Edit Post</h1>
                <div class="col-md-6">
                    <form method="post" action="{{ route('post.update', ['id' => $post->id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Problem</label>
                            <input type="text" class="form-control" id="id_title" name="problem"
                                   aria-describedby="title" value="{{ $post->problem }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="5" name="description">{{ $post->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">update post</button>
                    </form>
                </div>
            </main>
            
        </div>
    </div>
@endsection