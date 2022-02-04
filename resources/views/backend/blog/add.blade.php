@extends('backend.layouts.master')

@section('content')

<div class="content-wrapper">

  <div class="container">
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
      <br>

 <!-- Main content -->
 <section class="content">
    <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Blog</h3>
                    </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action=" {{route('create-blog')}}" method="POST"  enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Enter Title </label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Blog Title" required>
                </div>
                <div class="form-group">
                  <label for="title">Enter Slug </label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="textarea" name="content" placeholder="Place some text here"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>                                      
              </div>                      
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Blog Image</label>
                              <input type="file" name="img_url" class="form-control-file" id="img_url" required>
                            </div>
                      <input type="hidden" name="is_active" value="1">
                     
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

 </section></div></div>
</div>

@stop
@section('javascript')

<script src="{{ asset('/backend/js/wysihtml5.js') }}"></script>
    
@stop