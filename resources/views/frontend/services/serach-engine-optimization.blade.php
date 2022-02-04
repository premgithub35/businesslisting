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
                <h1>Search Engine  Optimization</h1>
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
                <h2 class="font-weight-light text-primary">Search Engine  Optimization</h2>
              </div>
              <div class="col-md-10 text-center">
              <p>[lead] Website user is a human being who’s most likely to discover you via a search engine. How likely? Google and Bing search engines together account for 75% of all web traffic. So basically there’s no excuse for ignoring SEO and PPC. Its not about whether you do it, its about how you do it using: [/lead] .</p>
              </div>
            </div>
            <div class="col-md-12 text-left">
                <h2 class="font-weight-light text-primary">Section 1: Introduction</h2>
                <p>Dedication to educating our clients is fundamental to all our engagements. The more you understand, the better we will be able to work together and drive the results that matter. We plan for both immediate wins and analyze the long-term risks and rewards of our recommendations. This focus on future-proof marketing allows us to proudly say we have never had a client go under penalty while under our care, though we’ve helped many who came to us for SEO penalty recovery.</p>
              </div>
              <div class="col-md-12 text-left">
                <h2 class="font-weight-light text-primary">Technical SEO Services</h2>
                Delivering technical solutions to marketing problems is essential. Technical SEO is more than placing out keywords throughout the site; it’s actually optimizing your site’s loading time for both users and search engines. It’s intentionally improving the source code running your site, the structure of the site and the backend processes itself. As the web has evolved, SEO has also grown with it, and our company has been there through all of its phases. It shows not only in our strategic procedures, but also in our ability to work upon the requirements that matters the most to your business.
            </div>
            <div class="col-md-12 text-left">
              <h2 class="font-weight-light text-primary">Every Business Needs SEO</h2>
              <p>The biggest need for SEO and all of the digital marketing strategies, is your unique business goals and needs. From the very beginning the we measure our performance indicators based upon the requirements which are the most vital for you. Our recommendations are tailored to your goals and your organization’s capabilities to execute.
              People ask for experience in SEO industry. But this almost seems like the wrong question. The right question should be: Can you optimize our site for the exact functionality keeping in mind the role it plays in my business? A website that needs generate ad views plays a totally different role than one with the objective of generate business. Our SEO strategists listen to your business objectives carefully before optimizing your website for search.</p>
            </div>          
        </div>
                
        <div class="card text-center bg-secondary text-white mb-4" style="max-width: 22rem;">
          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
          <div class="container"> 
            <h4 class="font-weight-light text-primary">Enquiry Form</h4>           
            <div class="card-body">                 
                  <div class="row">
                                                  
                      <form method="post" action="{{route('search-engine')}}" class="p-5 bg-white">
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
        
   