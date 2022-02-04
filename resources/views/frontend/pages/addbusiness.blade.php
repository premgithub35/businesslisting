@extends('template')
{{-- @include('frontend.layouts.nav') --}}
@section('body')
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>    
  </div>
       
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Join Business</h1>
                <p data-aos="fade-up" data-aos-delay="100">Handcrafted  templates by <a href="https://seospace.co" target="_blank">seospace.co</a></p>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">       
            <div class="container">
              <div class="row">       
                <div class="col-lg-9 col-md-10 ">               
       <p class="text-primary mb-3"><strong>Come, Be Our Add Business!</strong></p>     
        <div class="card" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 style="color: cyan" class="card-title">Add Business</h3>
            </div>
         
  <form method="post" action="{{route('business-store')}}" class="p-5 bg-white">
    @csrf 
              <div class="card-body">
      <div style="color: brown" class="row">
      <div class="col-sm-6">
     <div class="form-group">
      <label>Name <i class="fa  fa-asterisk"></i></label>
        <input required="true" class="form-control " placeholder="Name"   name="name" type="text" value="{{!empty($item->name) ? $item->name:'' }}" autocomplete="off" >
      </div>
    </div> 
    <div class="col-sm-6">                 
    <div class="form-group">
      <label>Code<i class="fa  fa-asterisk"></i></label>
        <input required="true" class="form-control " placeholder="Code"   name="code" type="text" value="{{!empty($item->code) ? $item->code:old('name') }}" autocomplete="off" >
      </div>
    </div>
    
    <div class="col-sm-6">                 
    <div class="form-group">
      <label>Categories Type<i class="fa  fa-asterisk"></i></label>
        {!! Form::select('itemtype',$itemtype, !empty($item->itemtype) ? $item->itemtype : old('itemtype')  ,['class' =>'form-control itemtype' ,'placeholder'=>'Selecet Business type','required'=>'true']); !!}
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
        </div>
      </div>
    </div>

    <div class="site-section">      
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-5"  data-aos="fade">
          <h2 class="text-primary mb-3">Join Our Business  Network Today!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
          <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p>

          <ul class="ul-check list-unstyled success">
            <li>Adipisci dolore reprehenderit</li>
            <li>Accusamus dicta laborum</li>
            <li>Delectus sed labore</li>
          </ul>
        </div>
        <div class="col-md-12 mb-5"  data-aos="fade">
            <h2 class="text-primary mb-3">How you can be benefited with Seospace?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
            <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p>
  
            <ul class="ul-check list-unstyled success">
              <li>Adipisci dolore reprehenderit</li>
              <li>Accusamus dicta laborum</li>
              <li>Delectus sed labore</li>
            </ul>
          </div>
      </div>
    </div>
</div>


    
