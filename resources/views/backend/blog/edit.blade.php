@extends('backend.layouts.master')

@section('content')

<div class="content-wrapper">
<br>
@if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
                <div class="card-header">
                        <h3 class="card-title">Edit Blog</h3>
                      </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('create-blog',$blog->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Title </label>
                  <input type="text" name="title" class="form-control" value="{{$blog->title}}" id="title" placeholder="Enter blog Name" required>
                </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Enter Content</label>
                        <input type="text" name="content" class="form-control"  value="{{$blog->content}}" id="content" placeholder="Enter Position" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter Slug</label>
                        <input type="text" name="slug" class="form-control"  value="{{$blog->slug}}" id="slug" placeholder="Enter Position" required>
                      </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">blog Image</label>
                                 <img style="width:5%" class="card-img-top" src="/images/blogs/{{$blog->img_url}}" alt="Card image cap">

                                <input type="file" name="img_url" class="form-control-file" id="img_url" required>
                              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

</div>
</div>
</div>

    </div>

</div>

@stop
@section('javascript')

<script src="{{ asset('/backend/js/wysihtml5.js') }}"></script>

@stop
