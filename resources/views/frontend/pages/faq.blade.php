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
                <h1>FAQ's Page</h1>
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
              <h2 class="font-weight-light text-primary">Frequently Ask Question</h2>
              <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
            </div>
          </div>
   
          <div class="row justify-content-center">
            <div class="col-10">
                @foreach($faq as $f)
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
   
   