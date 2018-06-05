@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <main role="main" class="col-sm-12 ml-sm-auto col-md-12 pt-3">
                <h4><strong>Problem: </strong>{{ $post->problem }}</h4><hr>
                
                    <h4><strong>Description: </strong>{{ $post->description }}</h4><br>
            </main>
        </div>
    </div>
@endsection