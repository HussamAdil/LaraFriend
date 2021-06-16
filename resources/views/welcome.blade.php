<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{asset('theme/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('theme/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
   <link href="{{asset('theme/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('theme/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
   <link href="{{asset('theme/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
   <link href="{{asset('theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link href="{{asset('theme/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/themes/prism-tomorrow.min.css" rel="stylesheet">
   <!-- Template Main CSS File -->
   <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
  
 </head>
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center">
      
            <div class="logo mr-auto">
              <h1 class="text-light"><a href="index.html"><span>LaraFriend</span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="https://bootstrapmade.com/demo/templates/Appland/assets/img/hero-img.png" alt="" class="img-fluid"></a>-->
            </div>
      
            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#documentation">Documentation</a></li>
                <li><a href="#progress">Progress</a></li>
                <li><a href="#team"> Who Am I ? </a></li>
   
              </ul>
            </nav><!-- .nav-menu -->
      
          </div>
        </header><!-- End Header -->
      
        <!-- ======= Hero Section ======= -->
        <section id="hero">
      
          <div class="container">
            <div class="row">
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                  <h1><span>LaraFriend</span></h1>
                  <h2>Minimal social media backend api help you to start test your front-end against a real API</h2>
                  <div class="text-center text-lg-left">
                    <a href="#documentation" class="btn-get-started scrollto">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="https://bootstrapmade.com/demo/templates/Appland/assets/img/hero-img.png" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>
      
          <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
              <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
              <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
              <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
          </svg>
      
        </section><!-- End Hero -->
      
        <main id="main">
       
      
          <!-- ======= Documentation Section ======= -->
          <section id="documentation" class="features">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Documentation</h2>
                <p>Check Our Documentation</p>
              </div>
      
              <div class="row" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                  <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                    <i class="ri-user-line" style="color: #19034b;"></i>
                    <h3><a href="#signup">Signup </a></h3>
                    
                  </div>
                </div>
                 
              </div>
      
            </div>
          </section>
            <section>
              <div class="container">
                <div id="signup" class="row">
                  <div class="col-sm-7">
                    <p>👇 <em>Create New User </em></p>
                    <pre>
                      
                      <code class="language-js">
                        fetch('https://www.larafriend.hussamadil.com/api/auth/signup', {
                          method: 'POST',
                          body: JSON.stringify({
                            name: 'Hussam adil',
                            email: 'mail@mail.com',
                            password: 1231232,
                            password_confirmation: 1231232,
                          }),
                          headers: {
                            'Content-type': 'application/json',
                            'Accept':'application/json'
                          },
                        })
                          .then((response) => response.json())
                          .then((json) => console.log(json));
                    </code>
                  </pre>   
                  </div>
                  <div class="col-sm-5">
                  <p>👇 <em>Response</em></p>
                  <pre><code class="language-js">{
                    "status": true,
                    "code": 201,
                    "message": "registration successfully",
                    "errors": [],
                    "data": {
                        "name": "Hussam Adil",
                        "email": "mails@hussamadil.com",
                        "id": 29,
                        "access_token": "random=token_A1MDExNmE3MWJlNT"
                     }
                  }
                  </code></pre>
                </div>
                </div>
              
              </div>
            </section>
          </section>    <!-- ======= end Documentation Section ======= -->
      
          <!-- ======= Pricing Section ======= -->
          <section id="progress" class="pricing">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Progress</h2>
                <p>Check our Progress</p>
              </div>
      
              <div class="row" data-aos="fade-left">
      
                <div class="col-lg-4 col-md-6">
                  <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3>Done</h3>
                     <ul>
                      <li>Signup</li>
                      <li>login</li>
                    </ul>
                  </div>
                </div>
   
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                  <div class="box" data-aos="zoom-in" data-aos-delay="400">
                
                    <h3>Inprogress</h3>
                     <ul>
                      <li>User Profile </li>
                    </ul>
                   
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="400">
                      <span class="advanced">Your Idea </span>
                      <h3>Future ideas</h3>
                     
                      <ul>
                        <li>share Your Idea</li>
                
                      </ul>
                     
                    </div>
                  </div>
      
              </div>
      
            </div>
          </section><!-- End Pricing Section -->
                 <!-- ======= Team Section ======= -->
                 <section id="team" class="team">
                  <div class="container">
            
                    <div class="section-title" data-aos="fade-up">
                      <h2 class="mb-4">Who Am I ?</h2>
                       
                    <div class="row" data-aos="fade-left">
                      <div class="col-sm-4">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                          <div class="pic">
                            <img src="https://i.stack.imgur.com/zYENw.png?s=328&g=1" class="img-fluid" alt=""></div>
                          
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="member-info">
                          <h4>Hussam Adil</h4>
                          <span> 
                          Hello! I'm Hussam, a software developer based in Sudan 🇸🇩. I enjoy creating things that live on the internet, whether that be websites, applications, or anything in between.
      
                          My goal is to always build products that provide pixel-perfect, performant experiences. I graduated from Sudan international University.</span>
                        </div>
                      </div>
                      
                
                    </div>
            
                  </div>
                </section><!-- End Team Section -->
        </main><!-- End #main -->
 
      
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <div id="preloader"></div>
      
        <!-- Vendor JS Files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/prism.min.js"></script>
        <script src="{{asset('theme/assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('theme/assets/vendor/aos/aos.js')}}"></script>
      
        <!-- Template Main JS File -->
        <script src="{{asset('theme/assets/js/main.js')}}"></script>
      
      </body>
</html>
