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

    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('images/hero_1.jpg')}}');" style="background-image: url(images/hero_1.jpg);"  src="{{URL::asset('images/hero_1.jpg')}}"   data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Categories Details</h1>
                <p data-aos="fade-up" data-aos-delay="100">Handcrafted  templates by <a href="https://seospace.co" target="_blank">seospace.co</a></p>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>  
    
  
    
    {{-- <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          @foreach ( $testimonials as $itemtype)
          <div class="col-md-10 text-center border-primary">
            <h2 class="font-weight-light text-primary">{{$itemtype->itemtype}}</h2>
            <p class="color-black-opacity-5">{!! $itemtype->content !!}</p>
          </div>
          @endforeach
        </div>
      </div> --}}

    
    <div class="site-section bg-light">
        <div class="container">
          <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="widget locations">
              <ul id="myUL">
              <?php  $locationData = $testimonials; 
        $co = 1;
        $array = array();
      ?>
      @foreach($locationData as $loc)

      <?php
        if (in_array($loc->name, $array))
        {
          continue;
        }else{
          array_push($array,$loc->name);
        }
        $name = str_replace('-', '|', $loc->name)
      ?>

<div class="d-block d-md-flex listing-horizontal">
  <a href="{{route('listing-single',$loc->id) }}" class="img d-block" style="background-image: url('/images/testimonials/{{$loc->img_url}}')" >
    <span class="category">{{$loc->name}}</span>
  </a>

  <div class="lh-content">
    {{-- <a  class="bookmark"><span class="icon-phone"></span></a> --}}
    <h3><a  href="{{route('listing-single',$loc->id) }}">{{$loc->name}}</a></h3>
    <p>{{$loc->address}}</p>
    <p>
      @php 
        $var = $loc->rating
      @endphp
       
          @for($i=1; $i<=$var; $i++)
          <span class="icon-star text-warning"></span>
          @endfor
      
    </p>
    
  </div>
  <div class="lh-content">
    <a href="/" class="bookmark"><span class="icon-heart"></span></a>
    <h3 style="color: #f38181;">+91 {{$loc->contact}}</h3>
    <div style="color: #f38181;" class="meta">Open - until 9:00AM - 8:00PM</div>   
  </div>

</div>
    
     
          <?php $co++; ?>
    @endforeach
                
              </ul>
            </div>

           


          </div>
          </div>
        {{-- {{ $testimonials->links() }} --}}

      </div> 
    </div>
  
  </div>






    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Categories</h2>
            <p class="color-black-opacity-5">Browse the most popular categories of services loved by people in UK. Get the list of top-rated the services in UK. Book the professional services online.</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/categories-details/7" class="popular-category h-100">
              {{-- <img src="{{URL::asset('images/Dentists.png')}}" alt="" style="max-height: 100px; max-width: 85px;"> --}}

              <span class="icon mb-3"><img style="width: 40px;" src="{{URL::asset('images/Dentists.png')}}"></span>
              <span class="caption mb-2 d-block">Dentists</span>
              <span class="number">4,89</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/categories-details/8" class="popular-category h-100">
              <span class="icon mb-3"><img style="width: 40px;" src="{{URL::asset('images/restaurants.png')}}"></span>
               <span class="caption mb-2 d-block">Restaurants</span>
              <span class="number">482</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/categories-details/11" class="popular-category h-100">
              <span class="icon mb-3"><img style="width: 40px;" src="{{URL::asset('images/Salon.png')}}"></span>
              <span class="caption mb-2 d-block">Nail Salon</span>
              <span class="number">194</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/categories-details/10" class="popular-category h-100">
              <span class="icon mb-3"><img style="width: 40px;" src="{{URL::asset('images/Vets.png')}}"></span>
              <span class="caption mb-2 d-block">Vets</span>
              <span class="number">1,472</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/categories-details/20" class="popular-category h-100">
              <span class="icon mb-3"><img style="width: 40px;" src="{{URL::asset('images/hotel.png')}}"></span>
              <span class="caption mb-2 d-block">Hotels</span>
              <span class="number">439</span>
            </a>
          </div>
          <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="/categories-details/24" class="popular-category h-100">
              <span class="icon mb-3"><img style="width: 40px;" src="{{URL::asset('images/doctor.png')}}"></span>
              <span class="caption mb-2 d-block">Doctors</span>
              <span class="number">692</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    
      <div class="py-5 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
              <h2 class="mb-3 mt-0 text-white">Let's get started. Add Your Business</h2>
              <p class="mb-0 text-white">Have a business to list with us?.</p>
            </div>
            <div class="col-lg-4">
              <p class="mb-0"><a href="/aad-business-signup" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Add Business</a></p>
            </div>
          </div>
        </div>
      </div>
    
     
  </div>

 
