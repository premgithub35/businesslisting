@extends('backend.layouts.master')

@section('content')

<div class="content-wrapper">

  
    <br>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <br>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <style type="text/css">
          .btn1
           {
           padding-left: 20px;
           padding-right: 20px;
           margin-right: 10px;
           font-size: 22px;
          
           }
          </style>
          
        
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-bars"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">TOTAL</span>
                <span class="info-box-number">{{$total}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-check"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">ACTIVE</span>
                <span class="info-box-number">N/A</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="info-box">         
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-exclamation"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">PAUSHED</span>  
                <span class="info-box-number">N/A</span>            
              </div>           
            </div>  
          </div>
        
           <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-remove"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">INACTIVE</span>
                <span class="info-box-number">N/A</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         
          <!-- /.col -->
        </div>
        </div>
    </section>
        <!-- /.row -->
      {{-- </div> --}}
   
    <div class="col-md-12 col-sm-6 col-xs-6">
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Business List</h3>
                  <div class="pull-right box-tools">
                    <a href="{{route('add-listing')}}" class="btn btn-success btn-sm btn-flat" > <i class="fa fa-plus"></i> Add New Business </a>
                  </div>
                </div>
              
<br/>
<form>
  <div class="row">
         <div class="col-md-3">
            <input type="text" class="form-control " name="id"  placeholder=" Enter id" value="{{app('request')->input('id') }}">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control " name="name"  placeholder=" Enter name" value="{{app('request')->input('name') }}">
          </div>
                   <div class="col">
                   <span class="input-group-btn "><button class="btn btn-success btn-md" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                   <a href="{{'listing'}}" class="btn btn-danger btn-md"><span class="fa fa-remove"></span></a>
                    </span>
                 </div>   
                
         
                  
          </div>
</form>
                                      
<hr/>
</div>
    </div>
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
            <thead>
              <th><a href="javascript:void(0)">Id</a></th>
              <th><a href="javascript:void(0)">Shop Name</a></th>
                <th><a href="javascript:void(0)">Image</a></th>
              <th><a href="javascript:void(0)">Location</a></th> 
              <th><a href="javascript:void(0)">Categories</a></th>
              <th><a href="javascript:void(0)">Contact No</a></th>
              <th><a href="javascript:void(0)">Rating</a></th>
              <th><a href="javascript:void(0)">Status</a></th>    
              <th><a href="javascript:void(0)">Created</a></th>
              <th><a href="javascript:void(0)">Modified</a></th>  
              <th>Action</th>  

      </tr>
         </thead>
         <tbody>
          @foreach ($testimonials as $testimonial)


      <tr>
        <td>{{$testimonial->id}}</td>
        <td>{{$testimonial->name}}</td>
        <td> <img style="width:30%" class="card-img-top" src="/images/testimonials/{{$testimonial->img_url}}" alt="Card image cap"> </td>
        <td>{{$testimonial->location}}</td>
        <td>{{$testimonial->itemtype}}</td>
        <td>{{$testimonial->contact}}</td>
        <td >@php 
          $var = $testimonial->rating
        @endphp
         
            @for($i=1; $i<=$var; $i++)
               <i class="fa fa-star stars" aria-hidden="true"></i>
            @endfor
         </td>
       
        <td class="text-muted" >
                @if ($testimonial->is_active == 1)
            <i class="fa fa-check" style="color:#42f448;"></i>{{'Enable'}}

            @else
            <i class="fa fa-times"  style="color:#f45942;"></i> {{'Disable'}}
            @endif
        </td>
        <td >{{ $testimonial->created_at }}</td>
        <td >{{ $testimonial->updated_at }}</td>
        <td><div class="row">
          
            <a href="{{route('edit-listing',$testimonial->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
            <a href="{{route('inactive-listing',$testimonial->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
            <a href="{{route('active-listing',$testimonial->id)}}" class="btn btn-sm btn-success"><i class="fa fa-check-square"></i></a>


        </div>  </td>
      </tr>
      @endforeach


      </tbody>
                    
                  </table>
                </div>
                {{ $testimonials->links() }}
              </div>
@endsection