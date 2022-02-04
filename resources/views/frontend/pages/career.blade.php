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
                <h1>Career</h1>
                <p data-aos="fade-up" data-aos-delay="100">Handcrafted free templates by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></p>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Business Listing- Join Our Team
                </h2>
              </div>
              <div class="col-md-10 text-center">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
              </div>
            </div>
            <div class="col-md-12 text-left">
                <h2 class="font-weight-light text-primary">Why Join Our Team?</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
              </div>
              <div class="col-md-12 text-left">
                <h2 class="font-weight-light text-primary">What you get?</h2>
                <li>Joining our team will bestow you with multiple in-tangible benefits as well. Here’s what you can expect: </li>
                <li>Joining our team will bestow you with multiple in-tangible benefits as well. Here’s what you can expect: </li>
                <li>Joining our team will bestow you with multiple in-tangible benefits as well. Here’s what you can expect: </li>
                <li>Joining our team will bestow you with multiple in-tangible benefits as well. Here’s what you can expect: </li>
                <li>Joining our team will bestow you with multiple in-tangible benefits as well. Here’s what you can expect: </li>
                <li>Joining our team will bestow you with multiple in-tangible benefits as well. Here’s what you can expect: </li>

            </div>
        </div><br><br>
        <div class="site-section">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Current Openings:</h2>
                <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
              </div>
            </div>
    
    
            <div class="row justify-content-center">
              <div class="col-10">
                  @foreach($career as $f)
                  <div class="container">
                <div class="accordion" id="accordionExample">
                
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$f->id}}" aria-expanded="false" aria-controls="collapseThree">
                         {{$f->title}}
                        </button>
                      </h2>
                    </div>
                    <div id="collapse{{$f->id}}" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                      {!! $f->content !!}
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                
                @endforeach                 
              </div>             
            </div>            
          </div>
        </div>
         
        </div>
         
        