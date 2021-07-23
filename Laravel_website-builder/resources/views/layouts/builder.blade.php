<?php 
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your Band</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/homepage/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/homepage/js-image-slider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/homepage/font-awesome.min.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(55.975004, -3.167146);

function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:15,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });
     
google.maps.event.addListener(map,'center_changed',function() {
// 3 seconds after the center of the map has changed, pan back to the marker
  window.setTimeout(function() {
    map.panTo(marker.getPosition());
  },3000);
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body id="app-layout">
   <!-- MY CODE START -->
<header1>
      <div>
          <nav1>
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#contact">Contact Us</a>
            <a href="/manage" id="rcorners1">Login / Register</a>
          </nav1>
      </div>
    </header1>
    <logo name="home"><img src="http://www.sinewavedesign.com/_assets/images/footer-logo-white.png"></logo>
		<!-- Header -->
		
			<section id="header">
        <div id="sliderReplacement"><img src="/images/homepage/image-slider-2.jpg"></div>
				<div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/javascript-image-slider" target="_blank">
                <img src="images/homepage/image-slider-1.jpg" />
            </a>
            <img class="images" src="images/homepage/image-slider-2.jpg" alt="" />
            <img src="images/homepage/image-slider-3.jpg"  />
        </div>
    </div>
    <br>
    <a href="/login"><span class="head_title">GET STARTED</span></a>
    <p class="head_caption">Create a beautiful website. Start your free trial today. </p>
			</section>
            <!-- First -->
            <section id="first" name="features">
	            <h2>Features</h2>
	            <p class"title_caption">Behind the beautiful interface, Your Band is an incredibly rich publishing platform.
Here, you can find an exhaustive list of everything the Your Band platform can do.</p>
<br><br>
<div class="row">
  <div class="col-md-4">
	  <div class="item">
      <div class="templates">
        <div class="icon">
          <svg width="50" height="50" viewBox="0 0 350 350" xmlns="http://www.w3.org/2000/svg"><title>Templates</title><g stroke-width="4" stroke="#d31e73" fill="none" fill-rule="evenodd"><path d="M61.535 47H240.72v239.658H61.536z"></path><path d="M7 101.645h95.047v131.148H7zm140.233 0H343.56v131.148H147.232z"></path></g></svg>
        </div>
      </div>
      <h3 class="feature_title">Templates</h3>
      <p>
        Your Band websites are created with modern browsers and mobile devices in mind. Accessible with all devices.
      </p>
    </div>
  </div>
  <div class="col-md-4"><div class="item">
      <div class="social">
        <div class="icon">
          <svg width="50" height="50" viewBox="0 0 350 350" xmlns="http://www.w3.org/2000/svg"><title>Social</title><g stroke-width="4" stroke="#d31e73" fill="none" fill-rule="evenodd"><path d="M212.383 29.333H5.663v164h30.232v49.2l49.025-49.2h127.463v-164z"></path><path d="M136.395 103.133h206.72v164H313.7v49.2l-49.024-49.2h-128.28v-168.5z"></path></g></svg>
        </div>
      </div>
      <h3 class="feature_title">Social</h3>
      <p>
        Import. Sync. Publish. Make your website the center of your online identity on the web with our powerful social integrations.
      </p>
    </div>
    </div>
    
  <div class="col-md-4"><div class="item">
      <div class="customization">
        <div class="icon">
          <svg width="50" height="50" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"><g stroke="#d31e73" fill="none" fill-rule="evenodd"><path d="M.5 7.5h34.2"></path><path d="M7.7 11.3V3.8" stroke-width="1"></path><path d="M.5 17.5h34.2"></path><path d="M27.3 21.2v-7.5" stroke-width="2"></path><path d="M.5 27.4h34.2"></path><path d="M15.8 31.1v-7.5" stroke-width="1"></path></g></svg>
        </div>
      </div>
      <h3 class="feature_title">Customization</h3>
      <p>
        Make any design your own using the Style Editor. Personalize fonts, colors, and layouts to create the custom look you want.
      </p>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-4">
    <div class="item">
      <div class="social">
        <div class="icon">
          <img src="images/homepage/pic.png" width="50" height="50">
        </div>
      </div>
      <h3 class="feature_title">Quality</h3>
      <p>
        Your Band showcases the website with crisp quality ensuring your users have a great experience.
      </p>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="item">
      <div class="support">
        <div class="icon">
          <svg width="50" height="50" viewBox="0 0 350 350" xmlns="http://www.w3.org/2000/svg"><title>Support</title><g transform="translate(12 12)" stroke-width="9" stroke="#d31e73" fill="none" fill-rule="evenodd"><circle cx="162.5" cy="162.5" r="162.5"></circle><path d="M164.412 43.015v122.353h77.426"></path></g></svg>
        </div>
      </div>
      <h3 class="feature_title">24/7 Customer Service</h3>
      <p>
        Rest easy knowing real people are ready to help you 24 hours a day. Everyone on our award-winning Customer Care team is an experienced Your Band user.
      </p>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="item">
      <div class="more">
        <div class="icon">
          <svg width="50" height="50" viewBox="0 0 350 350" xmlns="http://www.w3.org/2000/svg"><title>More</title><path d="M345 175c0 41-34 75-75 75s-95-75-95-75 54-75 95-75 75 34 75 75zM5 175c0 41 34 75 75 75s95-75 95-75-54-75-95-75-75 34-75 75z" stroke-width="10" stroke="#d31e73" fill="none" fill-rule="evenodd"></path></svg>
        </div>
      </div>
      <h3 class="feature_title">More</h3>
      <p>
        Check out our full feature list to see everything Your Band provides.
      </p>
    </div>
    </div>
    
</div>
<div class="logo_title">Socials</div>
<br><br>
    <section class="slider">
        <div class="flexslider carousel">
            <ul class="slides">
                <li><img src="images/social/facebook.jpg"></li>
                <li><img src="images/social/soundcloud.jpg"></li>
                <li><img src="images/social/twitter.jpg"></li>
                <li><img src="images/social/youtube.jpg"></li>
                <li><img src="images/social/spotify.jpg"></li>
                <li><img src="images/social/instagram.jpg"></li>
                <li><img src="images/social/itunes.jpg"></li>
                <li><img src="images/social/apple.jpg"></li>
                <li><img src="images/social/amazon.jpg"></li>
            </ul>
        </div>
    </section>
</section>
    <section id="screenshot">
	    <h2>Backend Features</h2>
    <img class="imagescreenshot" src="images/homepage/backend.jpg" />
    <p>Your Band allows you to use the features with ease. A complete user friendly design in both front-end and back-end.</p>
    </section>
<!-- Fourth -->
            <section id="fourth" class="main">
                <header id="contact">
                        <h2 class"contact_title">Contact Us</h2>
                        <p>If you have any questions, please feel free to fill in the form below. We will get back to you asap. </p>
 
                                            <ul>
                            <li>Email: hello@sinewavedesign.com</li>
                            <li>Phone: +44 (0)131 603 8825</li>
                        </ul>           
                </header>
                <div class="content style4 featured">
                    
                    <div class="container 75%">
                        <div align="center" id="googleMap" style="width:100%;height:300px;"></div>
                        <br>
                        <form method="post" action="#">
                            <div class="row 50%">
                                <div class="6u 12u(mobile)"><input type="text" placeholder="Name" /></div>
                                <div class="6u 12u(mobile)"><input type="text" placeholder="Email" /></div>
                            </div>
                            <div class="row 50%">
                                <div class="12u"><textarea name="message" placeholder="Message"></textarea></div>
                            </div>
                            <div class="row">
                                <div class="12u">
                                    <ul class="actions">
                                        <li><input type="submit" class="button" value="Send Message" /></li>
                                        <li><input type="reset" class="button alt" value="Clear Form" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            ---

        <!-- Footer -->
            <section id="footer">
                <div class="copyright">
                    <ul class="menu">
                        <li>&copy; Sinewave. All rights reserved.</li>
                        <li>Design: <a href="">IP3 Group</a></li>
                    </ul>
                </div>
            </section>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ URL::to('js/jquery.flexslider.js') }}"></script>
    <script src="{{ URL::to('js/js-image-slider.js') }}"></script>
    <script src="{{ URL::to('js/clients-slider.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
        <script>
	    $(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});
</script>
</body>
</html>
