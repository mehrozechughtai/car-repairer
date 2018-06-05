@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       @section('content')
    <main role="main" class="container"  style="margin-top: 5px">
        <h4> Welcome To Machanic Dashboard </h4><hr>
 
        <div class="row">
 
            <div class="col-sm-8 blog-main">
 
                 @if($posts)
                        @foreach($posts as $post)
                                
                                 <div class="blog-post">
                                    <h2 class="blog-post-title">{{ $post->problem }}</h2>
                                    <p class="blog-post-meta"><small>Query at: <i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</i></small></p>
                 
                                    <p>{{ $post->description }}</p>
                                   
                                </div><!-- /.blog-post -->
                                
                                
                                <td>
                                    <a href="{{ route('adminpost.detail', ['id' => $post->id]) }}">view more</a>
                                </td>
                               
                           <hr>
                        @endforeach
                    @else
                        <p class="text-center text-primary">No Query created Yet!</p>
                    @endif

               
 
              
 
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>
 
            </div><!-- /.blog-main -->
 
          
 
        </div><!-- /.row -->
 
    </main><!-- /.container -->
@endsection
    </div>
</div>
@endsection
