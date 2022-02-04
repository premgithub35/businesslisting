@extends('template')
@section('body')


  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
   
  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Review a local business</h1>
                <p data-aos="fade-up" data-aos-delay="100">Help other consumers to make better decisions
                    by sharing your experience with us.9</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <div class="col-md-8">

            <div class="pt-5">
              <h3 style="color: #f38181;" class="mb-5">### {{$total}} Comments</h3>
              <ul class="comment-list">
               
                <li class="comment">
                    @foreach($reviews as $r)
                
                  <div class="comment-body">
                    <div class="vcard bio">
                        <img src="images/comment_vcard.jpg" alt="Image placeholder">
                      </div>
                    <h3 style="color: #f38181;">{{$r->name}}</h3>               
                    <p>
                        @php 
                          $var = $r->rating
                        @endphp
                         
                            @for($i=1; $i<=$var; $i++)
                               <i class="fa fa-star stars text-warning" aria-hidden="true"></i>
                            @endfor
                        
                      </p>
                    <p>{{$r->comment}}</p>
                    <div style="color: #f38181;" class="meta">{{$r->created_at}}</div><br/><hr/>

                  </div>
                  @endforeach  
              
                </li>

               
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form method="post" action="{{route('comment')}}" class="p-5 bg-light">
                        {{ csrf_field() }}
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control"  name="name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control"  name="email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="rating">Reviews</label>
                    <input type="number" class="form-control"  name="rating" id="rating">
                  </div>

                  <div class="form-group">
                    <label for="comment">Message</label>
                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary text-white btn-md">
                  </div>

                </form>
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

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>