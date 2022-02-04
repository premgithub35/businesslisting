@extends('template')
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
      
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up">Find Nearby <span class="typed-words"></span></h1>
                <p data-aos="fade-up" data-aos-delay="100">1 INDIAN WEBSITE FOR LISTING LOCAL BUSINESS </p>
              </div>
            </div>
            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              {{-- @foreach($testimonials as $loc) --}}

              <form method="get" action="{{route('categoriesdetails')}}">
                {{-- <form role="form" action="{{route('create-update-listing',$testimonial->id)}}" method="post" enctype="multipart/form-data"> --}}
                  {{-- @endforeach --}}
               <div class="row align-items-center">
                <div class="col-lg-10 col-xl-4 no-sm-border border-right" id="">
                  <input type="text"class="typeahead form-control" name="categories" placeholder="Search local business in india" >
                </div>
                 
                 <div class="col-lg-12 col-xl-5 no-sm-border border-right">
                   <div class="wrap-icon">
                     <span class="icon icon-room"></span>

                     <input class="form-control" type="text" id="location" name="location" placeholder="Location">
                     <input type="hidden" name="lat" class="user_lat" value="">
                     <input type="hidden" name="lng" class="user_lng" value="">
                     {{-- <input type="text" class="form-control" placeholder="Location"> --}}
                   </div>  
                 </div>
                 <div class="col-sm-12 col-xl-3 ml-auto text-right">
                   <button type="submit" class="btn text-white btn-primary">Search</button>
                  </div>
                 
               </div>
             </form>

           </div>
          </div>
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
  .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
        </style>

<div class="site-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Featured businesses</h2>
        <p class="color-black-opacity-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  
    <div class="row">
      <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
              <div class="MultiCarousel-inner">
              
                @foreach ( $testimonials as $testimonial )
                  <div class="item">
                  
                      <div class="pad15">
                        <img class="card-img-top" src="/images/testimonials/{{$testimonial->img_url}}"
                        alt="Card image cap">
                        <a href="{{route('listing-single',$testimonial->id) }}">{{$testimonial->name}}</a>
                      </figure>
                      <blockquote>
                        <p>&ldquo;{!! $testimonial->location !!}&rdquo;</p>
                      </blockquote>
                    <p>
                      @php 
                        $var = $testimonial->rating
                      @endphp
                       
                          @for($i=1; $i<=$var; $i++)
                             <i class="fa fa-star stars text-warning" aria-hidden="true"></i>
                          @endfor
                      
                    </p>
                      </div>
                  </div> @endforeach
              </div>
              <button class="btn btn-primary leftLst"><</button>
              <button class="btn btn-primary rightLst">></button>
          </div>
    </div>
  </div>
  </div>

   
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular this week</h2>
            <p class="color-black-opacity-5">Trending services that are highly demanded by the people in UK this week. Browse and book the best from best services easily.</p>
          </div>
        </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <a href="/" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="/">Nail Salon</a></h3>
                <p>Find the best nail salon in UK to take care of your nails. Get the list of top-rated nearby nail salons in UK best suited for your requirement in a single tap.</p>                              
              </div>
            </div>
            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <a href="/" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="/">Carpenters & Joiners Services</a></h3>
                <p>Find professional carpenters & joiners services in UK. Get the list of top-rated Carpenters & Joiners Services in UK best suited for your requirement in one tap. Book Carpenters & Joiners Services online.</p>                              
              </div>
            </div> <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <a href="/" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="/">Garage Services</a></h3>
                <p>Find the best garage services in UK. Get the list of top-rated nearby garage services in UK best suited for your requirement in one tap. Book garage services online.</p>                              
              </div>
            </div> <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <a href="/" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="/">Dry Cleaners</a></h3>
                <p>Find the best dry cleaners in UK to take care of your dirty laundry. Get the list of top-rated nearby dry cleaners in UK best suited for your requirement in a single tap.</p>                              
              </div>
            </div> <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <a href="/" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="/">Beauty & Spa</a></h3>
                <p>Find the best beauty and Spa services online in UK to take care of your physical health as well as mental health. Find the top-rated beauty and spa services online.</p>                              
              </div>
            </div>
                              
          

          </div>
         

      

        
        
      </div>
   
      </div>
                                                                                                                         

      </div>
      </div>
    </div><br/>








    
    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Satisfied Customers</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Willie Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Robert Jones</p>
              </figure>
              <blockquote>
                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Peter Richmond</p>
              </figure>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5_sq.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
              </blockquote>
            </div>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>         
        <script type="text/javascript">
          var path = "{{ route('autocomplete') }}";
          $('input.typeahead').typeahead({
              source:  function (query, process) {
              return $.get(path, { query: query }, function (data) {
                      return process(data);
                  });
              }
          });
      </script>
   
   
        {{-- <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script> --}}
    {{-- <script>
      var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
    var matches, substringRegex;
    
    // an array that will be populated with substring matches
    matches = [];
    
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
    if (substrRegex.test(str)) {
    matches.push(str);
    }
    });
    
    cb(matches);
    };
    };
    
    var services = ['Dentists','Restaurants','Nail Salon','Vets','Hotels','Doctors'];
    
    $('#services .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
    },
    {
    name: 'services',
    source: substringMatcher(services)
    });
      </script> --}}

      <script>
        $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>
