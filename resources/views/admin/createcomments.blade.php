@extends('layouts.app')
@section('content')

      <div class="container shadow p-3 mb-5 bg-body rounded table-secondary">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>
                  Create Comment

                  <a href="/admin/posts" class="btn btn-primary" style="float: right"
                    >Go Back</a
                  >
                </h2>
              </div>

              <div class="card-body">
                <form
                  method="POST"
                  action="/admin/comments"
                  accept-charset="UTF-8"
                  class="form-horizontal"
                  role="form"
                >
                @csrf
                @method('Post')
                  <div class="form-group">
                    <label for="content" class="col-md-2 control-label"
                      >Content</label
                    >

                    <div class="col-md-8">
                      <input
                        class="form-control"
                        required="required"
                        autofocus="autofocus"
                        name="content"
                        type="text"
                        id="content"
                      />

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="post_id" class="col-md-2 control-label"
                      >Post</label
                    >

                    <div class="col-md-8">
                      <select
                        class="form-control"
                        required="required"
                        id="post_id"
                        name="post_id"
                        >
                        @foreach ($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->title }}</option>
                        @endforeach
                        </select>

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary">
                        Create
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 @endsection