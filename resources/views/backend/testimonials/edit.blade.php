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
                        <h3 class="card-title">Edit Listing</h3>
                      </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('create-update-listing',$testimonial->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Name</label>
                  <input type="text" name="name" class="form-control" value="{{$testimonial->name}}" id="name" placeholder="Enter Listing Name" required>
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Your Address </label>
                  <input type="address" name="address" class="form-control" value="{{$testimonial->address}}" id="address" placeholder="Enter Listing Address" required>
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Contact Number</label>
                  <input type="number" name="contact" class="form-control"  value="{{$testimonial->contact}}" id="position" placeholder="Enter Contact" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Location</label>
                  {{-- <input type="number" name="contact" class="form-control"  value="{{$testimonial->contact}}" id="position" placeholder="Enter Contact" required> --}}
                  <input type="text" name="location" class="form-control" id="location" value="{{$testimonial->location}}" placeholder="Enter Location" required>
                  {{-- <input class="form-control" type="text" id="location" name="location" placeholder="Location"> --}}
                  <input type="hidden" name="lat" class="user_lat" value="">
                  <input type="hidden" name="lng" class="user_lng" value="">
              
              
                
                
                </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Your Categories </label>
                        {!! Form::select('itemtype',$itemtype, !empty($item->itemtype) ? $item->itemtype : old('itemtype')  ,['class' =>'form-control itemtype' ,'placeholder'=>'Selecet Categories','required'=>'true']); !!}
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Your Rating </label>
                        <input type="number" name="rating" class="form-control" value="{{$testimonial->rating}}" id="rating" placeholder="Enter Listing Name" required>
                      </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1"> Shop Listing Image</label>
                                 <img style="width:5%" class="card-img-top" src="/images/testimonials/{{$testimonial->img_url}}" alt="Card image cap">

                                <input type="file" name="img_url" class="form-control-file" id="img_url" required>
                              </div>


                          {{-- </div> --}}

                <div class="form-group">
                        <label for="testimonial">Your Listing Quote</label>
                        <textarea name="details" id="details" class="form-control" rows="3" placeholder="Enter Listing Quote" required>{{$testimonial->details}}</textarea>
                      </div>
                      {{-- <div class="checkbox">
                        <label>
                          <input  value='{{$testimonial->is_active}}' type="checkbox"> Active On Screen
                        </label>
                      </div> --}}
              {{-- </div> --}}
              <!-- /.card-body -->

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

<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyAc9W1Pg-zFjXWx7vV3RMyoIC0TJ8ZLOkY&libraries=places'>
</script>
<script>
var autocomplete;
function geoCode() {
autocomplete = new google.maps.places.Autocomplete(
  /** @type  {HTMLInputElement} */(document.getElementById('location')),
  {
    types: ['geocode'], componentRestrictions: {
      country: "in"}
  }
);
google.maps.event.addListener(autocomplete, 'place_changed', function() {
  var place = autocomplete.getPlace();
  var address_full = $('#location').val();
  updateLocation(address_full,place);
}
                             );
}
geoCode();

// var autocomplete1;
// function geoCode1() {
// autocomplete1 = new google.maps.places.Autocomplete(
//   /** @type  {HTMLInputElement} */(document.getElementById('location1')),
//   {
//     types: ['geocode'], componentRestrictions: {
//       country: "in"}
//   }
// );
// google.maps.event.addListener(autocomplete1, 'place_changed', function() {
//   var place1 = autocomplete1.getPlace();
//   var address_full1 = $('#location1').val();
//   updateLocation(address_full1,place1);
// }
//                              );
// }
// geoCode1();
function updateLocation(address,place) {
var fmd_user = {
  address: place.address_components[0],
  address_full: address,
  lat: place.geometry.location.lat(),
  lng: place.geometry.location.lng(),
}
setStorage('fmd_user',JSON.stringify(fmd_user));
$('.location').val(address);
$('.user_lat').val(place.geometry.location.lat());
$('.user_lng').val(place.geometry.location.lng());
}
var fmd_user = getStorage('fmd_user');
console.log(fmd_user);
if (!empty(fmd_user)){
var fmd_user = JSON.parse(fmd_user)
$('.location').val(fmd_user.address_full);
$('.user_lat').val(fmd_user.lat);
$('.user_lng').val(fmd_user.lng);
}

</script>



@stop

