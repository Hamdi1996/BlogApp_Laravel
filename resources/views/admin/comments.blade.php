
@extends('layouts.app')
@section('content')


    <div class="container shadow p-3 mb-5 bg-body rounded table-secondary">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Comments

                            <a href="/admin/comments/create" class="btn btn-primary" style="float: right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->post->title }}</td>
                                    <td>{{ $comment->content }}</td>
                                    <td>
                                        <form action="/admin/comments/{{ $comment->id }}" method="POST" style="display: inline;">
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