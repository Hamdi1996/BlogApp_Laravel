
@extends('layouts.app')
@section('content')
<div class="container shadow p-3 mb-5 bg-body rounded ">


    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="panel panel-default ">
                @foreach($posts as $post)
                <div class=" card-header " >
                   <h3> {{ $post->title }}
                     <small ><span class="badge bg-success "> by {{ $post->author }}</span></small>
                   
                     <span class="badge bg-primary rounded-pill " style="float: right;font-size:.8rem"> {{ $post->created_at->diffForHumans() }}</span>
                       
                     </h3>
                </div>

                <div class="card-body">
                    <p>{{ $post->body }}</p>
    
                    <p>
                        <span class="btn btn-sm btn-success">ipsum</span>
                        <a href="/admin/comments/create">
                        <span class="btn btn-sm btn-info">Comments <span class="badge"></span></span>
                    </a>

                        <a href="/post/{{ $post->id }}" class="btn btn-sm btn-primary">See more</a>
                    </p>
                </div>
               
                
            </div>
             @endforeach
         
           

        </div>

      

    </div>
    
@endsection

    


