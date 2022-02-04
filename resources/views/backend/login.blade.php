<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/backend/css/login.css') }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="flash-container" style="left:15px;">
        @if(Session::has('message') && !Auth::check())
          <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">
            <a href="#" style="float:right;" class="alert-close" data-dismiss="alert">&times;</a>
          {{ Session::get('message') }}
          </div>
        @endif
        </div>
    <div class="main">
        <div class="container">
            {{-- <div class="text-center">
            <img src="/backend/img/img.png" alt="Laravel Starter" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            </div> --}}
            <center>
            <div class="middle">
                <div id="login">
    
                <form action="{{route('authenticate')}}" method="post">
                    @csrf 
                <fieldset class="clearfix">
    
                <p ><span class="fa fa-user"></span><input type="text" name="email" Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa fa-lock"></span><input type="password" name="password"  Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                
            <div>
            
                {{-- <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Forgot
                        password?</a></span> --}}
                <span style="width:50%; text-align:center;  display: inline-block;"><input type="submit" value="Sign Up"></span>
    </div>
    
              </fieldset>
    <div class="clearfix"></div>
            </form>
    
            <div class="clearfix"></div>
    
          </div> <!-- end login -->
          <div style="color: black" class="logo"><b>B-Listing</b></div>
              
              <div class="clearfix"></div>
          {{-- </div>eliable 
          
          </div> --}}
    </center>
        </div>
    
    </div>

</body>
</html>

