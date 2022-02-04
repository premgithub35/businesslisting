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
                <h1>Listings</h1>
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
          <div class="col-lg-12 col-md-12 col-md-12 ">               
 <p class="text-primary mb-3"><h3><strong>Categories!</strong></h3>     
  <div class="card" >
    <div class="card card-primary">
      <div class="card-header">
        <div class="col-md-12">
          <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" value="" placeholder="Search Business Name" autocomplete="off">
        </div>     
       </div>                      
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <div class="widget locations">
                    <ul id="myUL">
         
            @foreach($location as $loc)
    
          
          
                  <li>
                    
                  	<a  href="{{route('catdetails',$loc->id) }}"> {{$loc->name}}</a>
	        
            	</li>
             
          @endforeach
                      
                    </ul>
                  </div>
                </div>
    
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  {{-- </div> --}}
    
    
    
    
    @section('js')
    <script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
     <script type="text/javascript">
      
     $(document).on('click', '.links', function(e){
      e.preventDefault();
      clicked = $(this).attr('id');
      console.log(clicked);
      $('.'+clicked).submit();
    });
    </script>
    
    <script>
    
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    
    </script>





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
          <span class="icon mb-3"><img style="width: 40px;" src="images/Dentists.png"></span>
          <span class="caption mb-2 d-block">Dentists</span>
          <span class="number">4,89</span>
        </a>
      </div>
      <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="/categories-details/8" class="popular-category h-100">
          <span class="icon mb-3"><img style="width: 40px;" src="images/restaurants.png"></span>
           <span class="caption mb-2 d-block">Restaurants</span>
          <span class="number">482</span>
        </a>
      </div>
      <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="/categories-details/11" class="popular-category h-100">
          <span class="icon mb-3"><img style="width: 40px;" src="images/Salon.png"></span>
          <span class="caption mb-2 d-block">Nail Salon</span>
          <span class="number">194</span>
        </a>
      </div>
      <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="/categories-details/10" class="popular-category h-100">
          <span class="icon mb-3"><img style="width: 40px;" src="images/Vets.png"></span>
          <span class="caption mb-2 d-block">Vets</span>
          <span class="number">1,472</span>
        </a>
      </div>
      <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="/categories-details/20" class="popular-category h-100">
          <span class="icon mb-3"><img style="width: 40px;" src="images/hotel.png"></span>
          <span class="caption mb-2 d-block">Hotels</span>
          <span class="number">439</span>
        </a>
      </div>
      <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="/categories-details/24" class="popular-category h-100">
          <span class="icon mb-3"><img style="width: 40px;" src="images/doctor.png"></span>
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

 
