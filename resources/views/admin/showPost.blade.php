@extends('layouts.app')
@section('content')

      <div class="container shadow p-3 mb-5 bg-body rounded table-secondary">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="card-heading">
                <h2>
                  {{ $post->title }}
                 
                  <a href="/admin/posts" class="btn btn-info"style="float: right"
                    >Go Back</a
                  >
                </h2>
                <h5> <span class="badge bg-success">By :</span ><span class="badge bg-info">{{ $post->author }}</span> </h5>
              </div>

              <div class="panel-body">
                <p>
                 {{ $post->body }}
                </p>

                <p><strong>Category: </strong>ipsum</p>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection
 
