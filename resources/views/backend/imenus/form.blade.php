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

            <div class="card card-primary">
                    <div class="card-header">
                      <h3 style="color: cyan" class="card-title">Add Business</h3>
                    </div>
                 
					{!! Form::open(array('route' => 'business-store','class'=>'form-horizontal padding-15 js-validation-bootstrap','name'=>'user_form','id'=>'user_form','role'=>'form', 'autocomplete'=>'' ,'enctype' => 'multipart/form-data')) !!}
					@csrf 
                      <div class="card-body">
						  <div style="color: brown" class="row">
						  <div class="col-sm-6">
						 <div class="form-group">
							<label>Name <i class="fa  fa-asterisk"></i></label>
								<input required="true" class="form-control " placeholder="Name"   name="name" type="text" value="{{!empty($item->name) ? $item->name:'' }}" autocomplete="off" >
							</div>
						</div> 
						{{-- <div class="col-sm-6">                 
						<div class="form-group">
							<label>Code<i class="fa  fa-asterisk"></i></label>
								<input required="true" class="form-control " placeholder="Code"   name="code" type="text" value="{{!empty($item->code) ? $item->code:old('name') }}" autocomplete="off" >
							</div>
						</div> --}}
						
						<div class="col-sm-6">                 
						<div class="form-group">
							<label>Item Type<i class="fa  fa-asterisk"></i></label>
							  {!! Form::select('itemtype',$itemtype, !empty($item->itemtype) ? $item->itemtype : old('itemtype')  ,['class' =>'form-control itemtype' ,'placeholder'=>'Selecet item type','required'=>'true']); !!}
							</div>
						</div>

						

						<div class="col-sm-6">  
							<div class="form-group">               
							<label>Address<i class="fa  fa-asterisk"></i></label>
								<input required="true" class="form-control " placeholder="Address"   name="address" type="text" value="{{!empty($item->address) ? $item->address:old('address') }}" autocomplete="off" >
							</div>
						</div>
						<div class="col-sm-6">  
						<div class="form-group">
							<label>Contact<i class="fa  fa-asterisk"></i></label>
								<input required="true" class="form-control" placeholder="Phone No:" name="contact" type="number" id="textone" value="{{!empty($item->contact) ? $item->contact:old('contact') }}" autocomplete="off" >
							</div>
						</div>
						<div class="col-sm-6">  
						
                            <div class="form-group">
								<label for="exampleFormControlFile1">Listing Image</label>
								<input type="file" name="img_url" class="form-control-file" id="img_url" required>
							  </div>
						</div>
					
					 <div class="col-sm-6">  	
						<div class="form-group">
							<label>Status<i class="fa  fa-asterisk"></i></label>
								{!! Form::select('is_active', ['1' => 'Enable', '0' => 'Disable',], isset($item->is_active) ? $item->is_active: old('is_active')  ,['placeholder' => 'Select Status type ','class' =>'form-control','required'=>'true' ]); !!}
							</div>
						</div>
						<div class="col-sm-6">  	
						<div class="form-group">
							<label>Details<i class="fa  fa-asterisk"></i></label>
								<textarea  class="form-control" placeholder="Details..." name="details" rows="2" autocomplete="off" >{{!empty($item->details) ? $item->details:old('details') }} </textarea>
							</div>
						</div>

                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button style="color: cyan"  type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->           
    </div>    
	
	



	
</div>    

</div>
@stop

@section('javascript')

<script src="{{ asset('/backend/js/wysihtml5.js') }}"></script>
    
@stop