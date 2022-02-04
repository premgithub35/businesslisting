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
                <h1>Google Ads</h1>
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
            <div class="col-lg-8">  
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">PPC Management Services</h2>
              </div>
              <div class="col-md-10 text-center">
              <p>You are a growing company. You invested money on SEO. You got top rankings for your preferred keywords. But still someone else’s site is showing on the top.</p>
              </div>
            </div>
            <div class="col-md-12 text-left">
                <h2 class="font-weight-light text-primary">Section 1: What will you get with PPC?</h2>
                <p>The beauty and challenge of PPC lies in the range of options it can offer. Right combination of keywords and strategies can make sure that your business reached the right audience at the right place and at the right time.

                  You can control the regions to where your ads will show, the timings to when your targeted users are online, type of devices – mobile or desktops.
                  
                  Taking into the consideration of the custom targeting luxury that is available with PPC if you calculate the amount of money you’re spending for the number of filtered business leads you get is quite enticing.
                  
                  Trust us, PPC is worth investing.</p>
              </div>
              <div class="col-md-12 text-left">
                <h2 class="font-weight-light text-primary">Why choose Rankfrog as your PPC Partner?</h2>
                Every business is different and so are the business requirements. There is no fix formula to get maximum conversions out of PPC.  What works for a business might not work for some other. You need an experienced team with hands-on experience of PPC Management on variety of subjects and niches.</div>                             
        </div>
                
        <div class="card text-center bg-secondary text-white mb-4" style="max-width: 22rem;">
          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
          <div class="container">  
            <h4 class="font-weight-light text-primary">Enquiry Form</h4>          
            <div class="card-body">                 
                  <div class="row">
                                                  
                      <form method="post" action="{{route('google-ad')}}" class="p-5 bg-white">
                        {{ csrf_field() }}
                        <div class="row form-group">
                          <div class="col-md-12">
                            <label> Your Name <i class="fa  fa-asterisk"></i></label>
                            <input required="true" class="form-control " placeholder="Name"   name="name" type="text" value="{{!empty($item->name) ? $item->name:'' }}" autocomplete="off" >
                          </div>                             
                        </div>              
                        <div class="row form-group">                             
                          <div class="col-md-12">
                            <label>Email<i class="fa  fa-asterisk"></i></label>
                            <input required="true" class="form-control " placeholder="Your Email"   name="email" type="email" value="{{!empty($item->email) ? $item->email:'' }}" autocomplete="off" >
                          </div>   
                        </div>            
                        <div class="row form-group">                             
                          <div class="col-md-12">
                            <label>Number<i class="fa  fa-asterisk"></i></label>
                            <input required="true" class="form-control " placeholder="Your Number"   name="mobile" type="number" value="{{!empty($item->mobile) ? $item->mobile:'' }}" autocomplete="off" >
                          </div>   
                        </div>              
                        <div class="row form-group">                             
                          <div class="col-md-12">
                            <label> Service Item Type<i class="fa  fa-asterisk"></i></label>
                              {!! Form::select('serviceitem',$serviceitem, !empty($item->serviceitem) ? $item->serviceitem : old('serviceitem')  ,['class' =>'form-control serviceitem' ,'placeholder'=>'Selecet Services','required'=>'true']); !!}
                            </div></div>             
                        <div class="row form-group">
                          <div class="col-md-12">
                            <label>Details<i class="fa  fa-asterisk"></i></label>
                            <textarea  class="form-control" placeholder="Details..." name="description" rows="2" autocomplete="off" >{{!empty($item->description) ? $item->description:old('description') }} </textarea>
                          </div>
                        </div>              
                        <div class="row form-group">
                          <div class="col-md-12">
                            <input type="submit" value="Send Message" placeholder="Enter Message" class="btn btn-primary btn-md text-white">
                          </div>
                        </div>                
                      </form>
                    </div>                   
        </div>
      </div>
     </div>        
     <br><br>       
      </div>
    </div>
  </div>
         
    