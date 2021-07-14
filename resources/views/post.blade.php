@extends('layouts.app')
@section('content')

    <div class="container shadow p-3 mb-5 bg-body rounded table-secondary">
        <div class="panel-heading">
            <h2>
               Post's Comments

              <a href="/admin/posts" class="btn btn-primary" style="float: right"
                >Go Back</a
              >
            </h2>
          

            
          </div>
        <div class="row justify-content-center">
            
            <div class="col-md-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                       {{ $post->title }} - <small>by {{ $post->author }}</small>

                        <span class="pull-right">
                           {{ $post->created_at->diffForHumans() }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>
                        <p>
                            Category: <span class="label label-success">ipsum</span> <br>
                           
                           
                        </p>
                    </div>
                </div>


                @foreach ($post->comments as $comment )
                    
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }}

                        <span class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>

                    <div class="panel-body">
                        <p>{{ $comment->content }}</p>
                    </div>
                </div>
                @endforeach
            

            </div>



        </div>

    </div>
@endsection