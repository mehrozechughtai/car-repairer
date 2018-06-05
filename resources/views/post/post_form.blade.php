@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
           
             <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Post Query</h1>
                <div class="col-md-4">
                    <form method="post" action="{{ route('post.form') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Problem</label>
                            <input type="text" class="form-control" id="id_title" name="problem"
                                   aria-describedby="title" placeholder="Enter problem of your car here..">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="3" name="description" placeholder="Enter car problem description here.."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Query</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection