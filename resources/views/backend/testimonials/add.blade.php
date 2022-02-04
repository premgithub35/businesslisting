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
    <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Listing</h3>
                    </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action=" {{route('create-update-listing')}}" method="POST"  enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Shop Name </label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Listing Name" required>
                </div>
                	
                  <div class="form-group">
                    <label for="exampleInputEmail1">Categories </label>
                  {!! Form::select('itemtype',$itemtype, !empty($item->itemtype) ? $item->itemtype : old('itemtype')  ,['class' =>'form-control itemtype' ,'placeholder'=>'Selecet Categories','required'=>'true']); !!}
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Enter Shop Address </label>
                  <input type="address" name="address" class="form-control" id="address" placeholder="Enter Listing Address" required>
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Location </label>
                  <input type="text" name="location" class="form-control" id="location" placeholder="Enter Location" required>
                  {{-- <input class="form-control" type="text" id="location" name="location" placeholder="Location"> --}}
                  <input type="hidden" name="lat" class="user_lat" value="">
                  <input type="hidden" name="lng" class="user_lng" value="">
              
              
                </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Enter Contact Numbar</label>
                        <input type="number" name="contact" class="form-control" id="contact" placeholder="Enter Contact Number" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter Rating</label>
                        <input type="number" name="rating" class="form-control" id="rating" placeholder="Enter Rating" required>
                      </div>
                      
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Listing Image</label>
                              <input type="file" name="img_url" class="form-control-file" id="img_url" required>
                            </div>


                <div class="form-group">
                        <label for="testimonial">Enter Listing Quote</label>
                        <textarea name="details" id="details" class="form-control" rows="3" placeholder="Enter Listing Quote" required></textarea>
                      </div>

                      <input type="hidden" name="is_active" value="1">
                      {{-- <div class="checkbox">
                        <label>
                          <input type="checkbox" name="is_active" id="is_active" > Active On Screen
                        </label>
                      </div> --}}
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

{{-- </div>
</div> --}}
{{-- </div> --}}
</div>

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
