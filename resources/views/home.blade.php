<!doctype html>
<html lang="en">

<head>


    <!-- Required meta tags           red #f81c1c    black #30383b    project hover #0c1028-->
    <meta name="description" content="I'm Malik Alnabouli 23 years old from Libya Student at Tripoli University, Computer Science, I work as a web developer  & designer.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Malik Alnabouli</title>
    <link rel="icon" href="img/up2.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> --}}

    <script src="https://kit.fontawesome.com/d1498a58a6.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}"> <img src="img/logopng3.png" alt="Malik's Logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span style=" top: -16px; right: 11px; color: #fff; font-size: 33px;" class="fa fa-bars"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#service">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#projects">Projects</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#skills">Skills</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#about">About</a>
                                </li>

                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>

                                    </div>
                                </li> --}}

                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="team.html">team</a>
                                        <a class="dropdown-item" href="price.html">price</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">

				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
						<div class="myimg mb-4" style="background-image: url(img/my-image/mm.jpg);"></div>
					</div>
				</div>


                            <h5>Hey there i'm</h5>
                            <h1>Malik Alnabouli</h1>
                            <h2 style="color: white; margin-top: -20px;">Full Stack Developer</h2>
                            <p><\> Graduated From Tripoli University, Computer Science <\> </p>

          <div class="col-lg-4 col-md-12 col-sm-12">                
    @if (session('success'))
        <div style="" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->count())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    
    </div>                      
                            <div class="banner_btn one">
                                {{-- <a href="#" class="btn_1">Contact Me</a> --}}
                                <a href="{{route('home')}}#contact" class="btn_2">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- banner part start-->




    <!-- service_area  -->

    <a name="service"></a>
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <span>Service Provided</span>
                        <h3>My Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/web2.png" alt="">
                        </div>
                        <h3>Web Development</h3>
                        <p>web publishing, web programming, and database management using laravel, php and mysql.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/64.png" alt="">
                        </div>
                        <h3>Web Design</h3>
                        <p> creates the look, layout, and features of a website using Adobe XD, html, css, js, Bootstrp.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/robot.png" alt="">
                        </div>
                        <h3>Messenger ChatBot</h3>
                        <p>An automatic system that works to display your products or auto-reply via Facebook page messages</p>
                    </div>
                </div>
                
            </div>
        </div>
    <a name="projects"></a>
    </div>
    <!--/ service_area  -->


{{-- projects --}}
        {{-- For big image Add img-2 at class--}}

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <span>ACCOMPLISHMENTS</span>
                        <h3>My Projects</h3>
                    </div>          
                </div>
        </div>
    		<div class="row">




    			<div class="col-md-4">
                  <a>
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/222.png); width: 100%;">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3 style="color: #fff;">Online Courses</h3>
	    					        <h5 style="color: #fff;">Web Development</h5>
	    				</div>
    				</div>
                  </a>
  				</div>
  				<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/oc.png);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3 style="color: #fff;">Online Courses</h3>
	    					<h5 style="color: #fff;">Web Development</h5>
                            <p style="color: #fff;" style="color; #fff;"> korean language learning website.</p>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/dl.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3 style="color: #fff;">Delivery Management System</h3>
	    					<h5 style="color: #fff;">Web Development</h5>
                            <p style="color: #fff;" style="color; #fff;"> A system for managing delivery services to organize deliveries between stores and delegates.</p>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/dl3.png);">
	    	     	    <div class="overlay"></div>
         				    <div class="text text-center p-4">
	    					    <h3 style="color: #fff;">Delivery Management System</h3>
	        				    <h5 style="color: #fff;">Web Development</h5>
						    </div>
		    		    </div>
    			    </div>
    		    </div>


    			<div class="col-md-4">
                  <a>
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/project/bot.jpg);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3 style="color: #fff;">Diollo ChatBot</h3>
	    					        <h5 style="color: #fff;">An online store to display products, reservations and a lot of options across the system via page messages</h5>
	    				</div>
    				</div>
                  </a>
  				</div>
  				<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/project/doctor.png);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3 style="color: #fff;">MyDoctor</h3>
	    					<h5 style="color: #fff;">Web Design</h5>
                            <p style="color: #fff;" style="color; #fff;"> website has designed to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
	    				</div>
    				</div>
  				</div>


    			<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/project/library.png);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3 style="color: #fff;">Electronic Science Library</h3>
	    					<h5 style="color: #fff;">Web Design</h5>
                            <p style="color: #fff;" style="color; #fff;"> The Electronic science library was designed to help the students of the college of science to reach decisions, curricula and Tests for the benefit of the student.</p>
	    				</div>
    				</div>
    			</div>

    			<div class="col-md-4">
                            <a href="https://www.smartcell.ly">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(img/project/st.jpg);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3 style="color: #fff;">SmartCell System</h3>
	    					        <h5 style="color: #fff;">It is an integrated system that helps and organizes the client's project and the products that he sells through the Facebook page by designing and programming his own store within the messaging platform of his page
</h5>
			    				</div>
		    				</div>
                            </a>
    			</div>


    	    </div>
        </section>

    <a name="skills"></a>
		<section style="padding-top: 150px;" class="ftco-section bg-light" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
                  <div class="col-md-12 heading-section text-center ftco-animate">
                    <div class="section_title text-center mb-65">
                        <span>SKILLS</span>
                        <h3>My Skills</h3>
                    </div>  
                  </div>
                </div>
				<div style="margin-top: -30px;?" class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Laravel</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span class="o1">90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Bootstrap</h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span class="o2">70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>HTML5</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span class="o3">80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>CSS3</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="85"
							  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
							    <span class="o4">85%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>PHP</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="75"
							  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
							    <span class="o5">75%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>JavaScript</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span class="o6">70%</span>
							  	</div>
							</div>
						</div>
					</div>
                      <div style="margin-top: 30px;" class="col text-center">
                        <a href="{{ route('cer') }}" class="btnbtn py-2 px-5">My Certificates</a>
                      </div>
				</div>
				<div class="row justify-content-center py-5 mt-5">
    <a name="about"></a>
        </div>
		</section>

    <!-- about_me  -->
    <div class="about_me">
        <div class="about_large_title d-none d-lg-block">
            About
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_e_details">
                        <h1 style="font-size: 52px;"><strong>About me</strong></h1>
                        <p>Graduated From Tripoli university precisely at computer science department.programming is my passion, I work as web developer as well as web designer , My hobbies are solving programming issues which I am dealing with daily as a programmer. Even though l always improving my skills, I prefer to gaining new and different skills as well.</p>
                        <div class="download_cv">
                            <a class="boxed-btn3" href="{{route('home')}}#contact">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_img">
                        <div class="color_pattern d-none d-lg-block">
                            <img src="img/color_grid3.png" alt="">
                        </div>
                        <div class="my_Pic">
                            <img src="img/my-image/about5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_me  -->


{{-- hire me --}}

		<section class="ftco-section ftco-hireme">
			<div style="padding: 100px 0px;" class="container">
				<div class="row">
					<div class="col-md-8 col-lg-9 d-flex align-items-center ftco-animate">
						<h2>I'm <span>Available</span> For Freelancing</h2>
					</div>
					<div class="col-md-4 col-lg-3 d-flex align-items-center ftco-animate">
						<p class="mb-0"><a href="{{route('downloadcv')}}" class="btn btn-white py-4 px-5">Download CV</a></p>
					</div>
				</div>
			</div>
		</section>

{{-- contact --}}
    <a name="contact"></a>
    <section style="padding-top: 80px;" class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
                    <div class="section_title text-center mb-65">
                        <span>CONTACT</span>
                        <h3>Contact Me</h3>
                    </div>  
          </div>
        </div>
            <div class="row d-flex contact-info mb-5">
                <div class="col-md-4 col-lg-4 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p class="des">Libya, Tripoli, Zawiyat Al Dahmani</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <a href="tel://218927971679"><div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div></a>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a class="des" href="tel://218927971679">+218927971679</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <a href="mailto:maleknp127@gmail.com"><div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div></a>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a class="des" href="mailto:maleknp127@gmail.com">maleknp127@gmail.com</a></p>
                    </div>
                </div>
    <a name="contact2"></a>

            </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{route('contact')}}" method="post" class="bg-light p-4 p-md-5 contact-form">
             @csrf

    @if ($errors->count())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required oninvalid="this.setCustomValidity('Please enter your name ')" oninput="this.setCustomValidity('')">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email" required oninvalid="this.setCustomValidity('Please enter your E-mail ')" oninput="this.setCustomValidity('')">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required oninvalid="this.setCustomValidity('Please enter the subject ')" oninput="this.setCustomValidity('')">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="boxed-btn3 btn-primary py-2 px-4">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(img/contact.png);"></div>
          </div>
        </div>
      </div>
    </section>
 

     <footer class="site-footer slanted-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="fa fa-arrow-up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
            <div class="footer-social col-lg-12 text-center">
              <a href="https://web.facebook.com/Maleknp97"><span class="icon-facebook"></span></a>
              <a href="https://www.instagram.com/malik_al_nabouli/"><span class="icon-instagram"></span></a>
              <a href="https://www.linkedin.com/in/malik-alnabouli-a0863a1a4/"><span class="icon-linkedin"></span></a>
              <a href="https://twitter.com/Malek50342420"><span class="icon-twitter"></span></a>

            </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small class="block">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made <img width="30px" height="25px" src="img/up2.png"> by <a href="{{route('home')}}" >Malik Alnabouli</a>
            </small></p>
          </div>
        </div>
      </div>
    </footer>
  



    <!-- jquery plugins here-->

    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>

    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>