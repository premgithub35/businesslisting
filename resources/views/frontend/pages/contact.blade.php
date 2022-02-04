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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Contact us</h1>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
          {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
          <div class="container">
            <h1>Laravel 5.8 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</h1>   
            <input class="typeahead form-control" type="text">
        </div>
           
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
   </div>
</div>
    </div>

{{-- <script type="text/javascript">
   var route = "{{ url('autocomplete') }}";
   $('#search').typeahead({
       source:  function (term, process) {
       return $.get(route, { term: term }, function (data) {
               return process(data);
           });
       }
   });
</script> --}}
      </div>
    </div>
    
   
    