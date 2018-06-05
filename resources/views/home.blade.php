@extends('layouts.app')

@section('content')
<div class="container">
    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h4> Welcome {{ Auth::user()->name }} To Dashboard </h4>
                 @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
    </main>
    <main role="main" class="col-sm-3 ml-sm-auto col-md-2 pt-3">
                    <a href="{{ route('post.form') }}">
                        <button type="button" class="btn btn-primary btn-sm">Create Query</button>
                    </a>
    </main>
   

    <div class="row justify-content-center">

        <main role="main" class="container"  style="margin-top: 5px">
 
        <div class="row">
 
            <div class="col-sm-8 blog-main">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Problem</th>
                        <th>User</th>
                        <th>Learn more</th>
                        <th>Created on</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($posts)
                        @foreach($posts as $post)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $post->problem }}</td>
                                <td>{{ $post->name }}</td>
                                <td>
                                    <a href="{{ route('post.detail', ['id' => $post->id]) }}">view more</a>
                                </td>
                                <td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>
                            </tr>
                        @endforeach
                    @else
                        <p class="text-center text-primary">No Query created Yet!</p>
                    @endif
                </table><Br>
                
 
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>
 
            </div><!-- /.blog-main -->
 
           
 
        </div><!-- /.row -->
 
    </main><!-- /.container -->

    </div>

</div>
@endsection
