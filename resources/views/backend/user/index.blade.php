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
       
    <section class="content">
       
         
            <div class="container">
    
            <button type="button" class="btn btn-sm btn-primary" onclick="location.href='{{ url('admin/add-user') }}'" style="margin-bottom:5px"><i class="fa fa-plus"></i>&nbsp;Add User</button> 
    
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">User Management</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-striped">
                        <tr>
                          <th style="width: 10px">Id</th>
                          <th style="width: 10px">Name</th>
                          <th style="width: 25px">Email</th>
                          <th style="width: 10px">Roles</th>
                          <th style="width: 15px">Created</th>
                          <th style="width: 15px">Updated</th>
                          <th style="width: 15px">Status</th>
                          <th style="width: 15px">Action</th>
                        </tr>
                        
                        @foreach ($users as $u)
                      
                        <tr>
                        <td>{{$u->id}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>                    
                        <td>                           
                            <span class="badge bg-success">{{$u->role->name}}</span>                          
                        </td>
                        <td >{{date('d-m-Y H:i',strtotime($u->created_at))}}<br/>                  
                        </td>
                        <td >{{date('d-m-Y H:i',strtotime($u->updated_at))}}</td>               
                        <td>
                            @if ($u->is_active == 1)
                            <span class="badge bg-success">{{'ACTIVE'}}</span>   
                        @else
                        <span class="badge bg-danger">{{'INACTIVE'}}</span>     
                        @endif
                        </td>
                        <td>
                        <a href="{{route('edit-user',$u->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="{{route('active-user',$u->id)}}" class="btn btn-sm btn-success"><i class="fa fa-check-square"></i></a>
                        <a href="{{route('inactive-user',$u->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                        </td>
                          </tr>
                        @endforeach
                       
                      </table>
                    </div>
                    {{ $users->links() }}

                    <!-- /.card-body -->
                  </div>
            </div>
         
        
    </section>

</div>

@stop