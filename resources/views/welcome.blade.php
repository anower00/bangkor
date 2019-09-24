<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bangkor</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('front_end/style.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
	<script src="https://kit.fontawesome.com/beffab7788.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"><!-- groupslider -->
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- header slider area start -->
<div class="header" id="home" style="height: 90vh;">
	  <section >
	    <div id="slider-animation" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
		    <li data-target="#slider-animation" data-slide-to="1"></li>
		    <li data-target="#slider-animation" data-slide-to="2"></li>
		  </ul>
		  <!-- The slideshow -->
			<div class="carousel-inner">
                @foreach( $sliders as $slider)
			    <div class="carousel-item active">
			        <img class="img-responsive respon" src="{{ asset('slider/' . $slider->image) }}">
                        <div class="text-box">
                            <h2 class="wow slideInRight" data-wow-duration="2s">{{ $slider->title }}</h2>
                            <p class="wow slideInLeft" data-wow-duration="2s">{{ $slider->sub_title }}</p>
                        </div>
			    </div>
                @endforeach
		  	</div>
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#slider-animation" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
</section>
</div>
<!-- header slider area end -->
<!-- navbar area start -->
<div id="navbar" >
 <nav class="navbar navbar-expand-md  navbar-dark"  >
  <a class="navbar-brand" href="#"><img class="logo_img" src="{{ asset('front_end/img/mainlogo.png')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  	<div class="menu_middle">
	    <ul class="navbar-nav">
		      <li class="nav-item ">
		        <a class="nav-link " href="#home">HOME</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#about">ABOUTS</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#statistic">STATS</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#product">PRODUCTS</a>
		      </li>  
		         <li class="nav-item">
		        <a class="nav-link" href="#second_slider_gallery">GALLERY</a>
		      </li> 
		      <li class="nav-item">
		        <a class="nav-link" href="#News">NEWS</a>
		      </li>  
		      <li class="nav-item">
		        <a class="nav-link" href="#contact_area">CONTACTS</a>
		      </li> 

	    </ul>
	</div>
	
  </div>
   <div class="pull-right social">
	    <ul>
	    	<li class="so_li"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
	    	<li class="so_li"><a href="#"><i class="fab fa-twitter"></i></a></li>
	    	<li class="so_li"><a href="#"><i class="fab fa-instagram"></i></a></li>
	    </ul>
	</div>
</nav>
</div>
<!-- navbar area end -->
<!-- about us area start -->
<section>
	<div class="about" id="about">
	 	<div class="container">
            <div class="row " style="margin-top: 100px; text-align: center;">
                <div class="col-xs-12 col-md-4">
                    <div class="about_text0">
                        <h2 class="about_h2">One Stop Packaging Solution</h2>
                        <p class="">Tagline...ipsum dolor sit amet, consectetur adipiscing elit, sed” </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="about_img1">
                        <img src="{{asset('front_end/img/10years.jpg')}}">
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="about_text2">
                        <p class="about_p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-md-4">
                    <div class="about_text1">
                    	<img src="{{asset('front_end/img/idea.png')}}">
                        <h4 class="about_h4">Knowledge</h4>
                        <p class="about_p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="about_text1">
                        <img src="{{asset('front_end/img/deal.png')}}">
                        <h4 class="about_h4">Integrity</h4>
                        <p class="about_p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="about_text1">
                    	<img src="{{asset('front_end/img/settings.png')}}">
                    	<h4 class="about_h4"> Collaboration</h4>
                        <p class="about_p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!-- about us area end -->
<!-- stats area start -->
<section id="statistic"  class="statistic-section one-page-section">
        <div class="container">
        	<h1 class="stats_h1">Stats</h1>
        	<p class="stats_p">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original.</p>
            @foreach($statistics as $state)
            <div class="row text-center">
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="stats-icon fa fa-user-friends "></i>
                        <h2 class="timer count-title count-number">{{ $state->total_clients }}</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Happy Clients</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">

                        <i class="fas fa-laptop-code fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">{{ $state->clients_retained }}
                        </h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Modern Templates</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-clock-o fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">{{ $state->sale_volume }}</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Followers</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fas fa-award fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">{{ $state->client_referrals }}</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Awards</p>
                    </div>
                </div>
            </div>

                @endforeach
        </div>
    </section>
<!-- stats area start -->
<!-- mission area start -->
<section id="mission"  class="mission one-page-section">
        <div class="container">
              <div class="row ">
                <div class="col-xs-12 col-md-3">
                    <div class="mission_middle">
                    	<img src="{{asset('front_end/img/growth.jpg')}}" class="respon">
                        <h5 class="mission_h5">GROWTH STORY</h5>
                        <p class="middion_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="mission_middle"> 
                    <img src="{{asset('front_end/img/vission.jpg')}}" class="respon">                     
                        <h5 class="mission_h5">MISSION & VISION
                        </h5>                
                        <p class="middion_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="mission_middle">
                    	<img src="{{asset('front_end/img/quality.jpg')}}" class="respon">
                        <h5 class="mission_h5">QUALITY PROCESS</h5> 
                        <p class="middion_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="mission_middle">    
                    	<img src="{{asset('front_end/img/future.jpg')}}" class="respon">        
                        <h5 class="mission_h5">FUTURE EXPENSION</h5>
                        <p class="middion_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- mission area end -->
<!-- product area start -->
<section id="product">
<h2 class="product_h2">OUR PRODUCTS</h2>

<div id="myBtnContainer">

  
  <div class="row">
  	<div class="col-md-3 btnr pro_img"  onclick="filterSelection('paper')">
  		<div class="after_text"><span class="text_fil">COMMERCIAL PRINTING</span></div>
  		<img  class="img-responsive product_img" src="img/product/paper.jpg">
  	</div>
  	<div class="col-md-3 btnr pro_img"  onclick="filterSelection('cards')">
  		<div class="after_text"><span class="text_fil">PLAYING CARD</span></div>
  		<img  class="img-responsive product_img" src="img/product/PlayingCard.jpg">
  	</div>
  	<div class="col-md-3 btnr pro_img"  onclick="filterSelection('boxs')">
  		<div class="after_text"><span class="text_fil">FOLDING BOX BOARD</span></div>
  		<img  class="img-responsive product_img" src="img/product/foldingbox.png">
  	</div>
  	<div class="col-md-3 btnr pro_img"  onclick="filterSelection('all')">
  		<div class="after_text"><span class="text_fil">VIEW ALL</span></div>
  		<img  class="img-responsive product_img" src="img/product/red.jpg">
  	</div>
  </div>
</div>

<div class="container filter_gall" >
  <div class="filterDiv paper"><img src="img/product/cheiftain-289x300.png"></div>
  <div class="filterDiv paper"><img src="img/product/kinglogo.jpg"></div>
  <div class="filterDiv paper"><img src="img/product/Luxstar.png"></div>
  <div class="filterDiv boxs"><img src="img/product/navia.jpg"></div>
  <div class="filterDiv paper cards"><img src="img/product/Ningbo_Fold_ProductImg.png"></div>
  <div class="filterDiv boxs"><img src="img/product/Ningbo_Poker.png"></div>
  <div class="filterDiv cards"><img src="img/product/Proxima_logo2.png"></div>
  <div class="filterDiv cards"><img src="img/product/Zenith_logo.png"></div>
  <div class="filterDiv boxs"><img src="img/product/Ningbo_Poker.png"></div>
  <div class="filterDiv boxs cards"><img src="img/product/kinglogo.jpg"></div>
  <div class="filterDiv boxs"><img src="img/product/Zenith_logo.png"></div>
  <div class="filterDiv boxs"><img src="img/product/cheiftain-289x300.png"></div>
  <div class="filterDiv cards"><img src="img/product/Ningbo_Poker.png"></div>
  <div class="filterDiv boxs"><img src="img/product/Proxima_logo2.png"></div>
</div>


</section>
<!-- product area end-->
<!-- 2nd slider area start -->
<section id="second_slider_gallery"  class="second_slider_class">     
    <div class="wrapper">
        <div class="gallery">
           @foreach($galleries as $gallery)
            <div class="gallery__img-block  current">
               <img src="{{ asset('gallery/' . $gallery->gallery_image) }}" thumb-url="{{ asset('gallery/' . $gallery->gallery_image) }}" class="">
            </div>
         @endforeach
            <div class="view_all_gallery"><a href="#">View All ></a></div>
            <div class="gallery__controls">
            	
            </div>
        </div>
    </div>        
</section>
<!-- mission area end -->
<!-- team area start -->
<section id="team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 team_img">
					<img class="img-responsive" src="{{asset('front_end/img/ceo.png')}}">
			</div>
			<div class="col-md-3 team_text">
				<h3>MD.SOBHAN AHMAD <span>CEO</span></h3>
				<p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
			</div>
			<div class="col-md-3 team_text1">
				<h3>MD.SOBHAN AHMAD <span>Chairman</span></h3>
				<p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
			</div>
			<div class="col-md-3 team_img">
				<img class="img-responsive" src="{{asset('front_end/img/manager.png')}}">
			</div>
		</div>
		<div class="view_team">
			<button type="button" class="btn btn-danger v_t_btn">VIEW FULL TEAM</button>
		</div>
		
	</div>
</section>
<!-- team area end -->
<section id="Maps">
	  <div class="container-fluid">
	    <div class="row">
	    	<div class="col-md-12 ">
		      <div class="flag pull-right">
		        <div class="pic">
		            <div class="photo1">
			           	<div class="text">

			              	<p>SOUTH AFRICA</p>
			              	<p class="side"><span>Location</span><br> 124,dhanmondi,dhaka.</p>
			           	</div>
			        </div>
			    </div>
		        <div class="pic ">
		            <div class="photo2">
			            <div class="text">
			                <p>BRASIL</p>
			                <p class="side"><span>Location</span><br> 124,dhanmondi,dhaka.</p>
				        </div>
		            </div>
		        </div>
		         <div class="pic ">
		            <div class="photo4">
			            <div class="text">
			                <p>GERMANY</p>
			                <p class="side"><span>Location</span><br> 124,dhanmondi,dhaka.</p>
				        </div>
		            </div>
		        </div>
		        <div class="pic ">
		            <div class="photo3">
			            <div class="text">
			                <p>AUSTRILIA</p>
			                <p class="side"><span>Location</span><br> 124,dhanmondi,dhaka.</p>
				        </div>
		            </div>
		        </div>
		       
		        <div class="pic ">
		            <div class="photo5">
			            <div class="text">
			                <p>UGANDA</p>
			                <p class="side"><span>Location</span><br> 124,dhanmondi,dhaka.</p>
				        </div>
		            </div>
		        </div>
		      </div>
		    </div>
		</div>
	  </div>
	</div>
</section>
<!-- group slider news start -->
<div class="container" id="News">
<div class="grp_text">
	<h2>LATEST NEWS</h2>
	<span></span>
	<p>Vestibulum ac tellus ex Integer consectetur.</p>
</div>
 
<div id="mixedSlider">
                    <div class="MS-content">
                        @foreach($newses as $news)
                        <div class="item">
                            <a href="{{ $news->link }}">
                            <div class="imgTitle">
                                <h5 class="blogTitle">{{ $news->created_at }}</h5>
                                <img src="{{ $news->link_image }}" alt="" />
                            </div>
                            <h6>{{ $news->link_title }}</h6>
                            {{--<p>{{ $news->link_description }}</p>--}}
                            <p>
                                {{ str_limit(strip_tags($news->link_title), 80) }}
                                @if (strlen(strip_tags($news->link_title)) > 80)
                                    {{--<a style="color:#000;" href="#"><strong>read more</strong></a>--}}
                                @endif
                            </p>
                             </a>
                        </div>
                            @endforeach
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-angle-left Le_Arrow" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-angle-right Le_Arrow" aria-hidden="true"></i></button>
                    </div>
                </div>
</div>
<!-- group slider news end -->
<!-- contact area start -->
<div  id="contact_area" class="container-fluid">
	<div class="row">
		<div class="col-md-6 contact_input_ar">
			<p class="con_p">REACH US</p>
			<div class="mid_con">
				<label>Name</label>
				<input type="text">
				<label>E-mail</label>
				<input type="text">
				<label>Message</label>
				<input type="text">
				<button type="button" class="btn pull-right submit">Submit</button>
			</div>	
		</div>
		<div class="col-md-6 maps_con">
			<iframe style="width: 100%;height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17192.285766869896!2d90.40271872865196!3d23.84720090224427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ecc977b9db%3A0xad994f7126580218!2sDhaka%20Airport!5e0!3m2!1sen!2sbd!4v1568713548219!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		
	</div>
</div>
<!-- contact area end -->

<footer>
	<div class="container-fluid footer_bangkor">
		<div class="row">
			<div class="col-md-4 foot_left">
				<img class="img-responsive" src="{{asset('front_end/img/logofooter.png')}}">
			</div>
			<div class="col-md-4 foot_mid">
				<h5>CONTACT US</h5>
				<p><i class="fas fa-map-marker-alt"></i> Location</p>
				<p>125 baridhara,top road. </p>
				<p><i class="fas fa-phone"></i> Phone</p>
				<p>+88017585256</p>
				<p><i class="fas fa-envelope"></i> E-mail</p>
				<p>bangkor@mail.com</p>
			</div>
			<div class="col-md-4 foot_right">
				<h5>Quick Links</h5>
				<p>lorem Ipsome</p>
				<p>lorem Ipsome</p>
				<p>lorem Ipsome</p>
				<p>lorem Ipsome</p>
			</div>
		</div>
	</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script  src="https://code.jquery.com/jquery-3.2.1.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<!-- for 2nd slider -->
	<script src="{{ asset('front_end/dist/scripts/vit-gallery.js') }}"></script>
	
	<script src="{{ asset('front_end/main.js') }}"></script>
	<!-- for 2nd slider -->
<script src="{{ asset('front_end/js/multislider.js') }}"></script> <!-- bottom slider -->
 <!-- 2nd slider js -->

 <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1100, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btnr");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<script type="text/javascript">
	 $(document).ready(function($) {
        $('.count-number').counterUp({
            delay: 10,
            time: 1000
        });//for counter 
 });
</script>
<script>
$('#basicSlider').multislider({
			continuous: true,
			duration: 2000
		});//bottom slider news
		$('#mixedSlider').multislider({
			duration: 750,
			interval: 3000
		});
</script>
<script>
//top navbar 
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>


</body>
</html>
