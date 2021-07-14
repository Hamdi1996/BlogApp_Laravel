
@extends('layouts.app')
@section('content')

    <div class="container shadow p-3 mb-5 bg-body rounded table-secondary">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href="/admin/posts/create" class="btn btn-primary" style="float: right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table table table-sm">
                            <thead  classs="table table-dark">
                                <tr >
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    
                                    <th>Published</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ( $posts as $post )
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->body }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>ipsum</td>
                                    <td></td>
                                    <td>No</td>
                                    <td>
                                       
                                        <a href="/admin/posts/{{ $post->id }}" class="btn btn-xs btn-success">Show</a>
                                        <a href="/admin/posts/{{ $post->id }}/edit" class="btn btn-xs btn-info">Edit</a>
                                        <form action="/admin/posts/{{ $post->id }}" method="POST" style="display: inline;">
                                            @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
               
                            </tbody>
                        </table>

                      

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection