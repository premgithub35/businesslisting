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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               <span> <h3 class="card-title"><b> All Blog List </b>
                    <button type="button" class="btn btn-sm btn-primary" onclick="location.href='{{ url('admin/add-blog') }}'" style="margin-bottom:5px"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add New Blog</button>

                </h3>
            </span>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>slug</th>
                    {{-- <th>Description</th> --}}
                    <th>Image</th>
                    {{-- <th>Quota</th> --}}
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($blogs as $blog)
                  <tr>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->slug}}</td>
                    {{-- <td>{!! $blog->content !!}</td> --}}

                    <td> <img style="width:30%" class="card-img-top" src="/images/blogs/{{$blog->img_url}}" alt="Card image cap"> </td>
                    {{-- <td>{{$testimonial->details}}</td> --}}

                    <td class="text-muted" >
                            @if ($blog->is_active == 1)
                        <i class="fa fa-check" style="color:#42f448;"></i>{{'Enable'}}

                        @else
                        <i class="fa fa-times"  style="color:#f45942;"></i> {{'Disable'}}
                        @endif
                    </td>

                    <td><div class="row">
                      
                        <a href="{{route('edit-blog',$blog->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="{{route('inactive-blog',$blog->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                        <a href="{{route('active-blog',$blog->id)}}" class="btn btn-sm btn-success"><i class="fa fa-check-square"></i></a>


                    </div>  </td>
                  </tr>


                  </tbody>
                  @endforeach
                </table>
              </div>
              {{ $blogs->links() }}

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </section>
   </div>
</div>


@stop
