<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" href="{{URL::asset('/image/favicon/favicon.ico')}}">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/plugin.css') !!}">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <title>Laravel</title>
    
    
  </head>
  <body>
    <!-- Preloader Start -->
     <div class="preloader">
     <div class="rounder"></div>
    </div>
    <!-- Preloader End -->

    <div id="main">
    <div class="container">
      <div class="row">
       <!-- About Me (Left Sidebar) Start -->
       <div class="col-md-3">
         <div class="about-fixed">

           <div class="my-pic">
              <img src="{{URL::asset('image/pic/my-pic.png')}}" alt="">
              <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
               <div id="menu" class="collapse">
                 <ul class="menu-link">
                     <li><a href="{{url('about')}}">About</a></li>
                     <li><a href="work.html">Work</a></li>
                     <li><a href="contact.html">Contact</a></li>
                  </ul>
               </div>
              </div>



            <div class="my-detail">

              <div class="white-spacing">
                  <h1>Norhazwani</h1>
                  <span>Web Developer</span>
              </div> 

             <ul class="social-icon">
               <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://github.com/wanirom" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
              </ul>

          </div>
        </div>
      </div>
      <!-- About Me (Left Sidebar) End -->

     <!-- Blog Post (Right Sidebar) Start -->
     <div class="col-md-9">
        <div class="col-md-12 page-body">
          <div class="row">
            <div class="sub-title">
                <h2><a href="{{url('/')}}">My Blog</a></h2>
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> {{Auth::check() ? Auth::user()->name : 'Account'}}</a></li>
                            <li><a href="{{Auth::check() ? url('auth/logout') : url('auth/login')}}"><i class="fa fa-lock"></i> {{Auth::check() ? 'Logout' : 'Login'}}</a></li>
                        </ul>
                    </div>

             </div>

            <div class="col-md-12 content-page">
              @if(Session::has('flash_message'))
                  <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
                      {{ Session::get('flash_message') }}
                  </div>
              @endif

              @if($errors->any())
                  <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                      @foreach($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach
                  </div>
              @endif

              @yield('content')  
            </div>
           </div>
        </div>


       <!-- Footer Start -->
       <div class="col-md-12 page-body margin-top-50 footer">
          <footer>
          <ul class="menu-link">
               <li><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="work.html">Work</a></li>
               <li><a href="contact.html">Contact</a></li>
            </ul>
          <p>© Copyright 2016 DevBlog. All rights reserved</p>


          <!-- UiPasta Credit Start -->
          <div class="uipasta-credit">Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
          <!-- UiPasta Credit End -->

         </footer>
       </div>
       <!-- Footer End -->
      </div>
      <!-- Blog Post (Right Sidebar) End -->

      </div>
     </div>
    </div>
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
       
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugin.js') !!}"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{!! asset('js/scripts.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            @yield('postJquery');
        });
    </script>
  </body>
</html>
