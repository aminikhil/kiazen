<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kaizen Infotek</title>
<link href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
<!--  Style Sheets-->
<link href="css/master.css" rel="stylesheet" type="text/css">
<link href="css/master_mobile.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--  Title Icon-->
<link rel = "icon" href =  "images/logo1.png" type = "image/x-icon">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript">
//  Code For automatically collaspe navigator
  $(document).ready(function() {
    function checkOffset() {
        $(".navbar-collapse").removeClass("show");
    }
    // // Run function when scrolling
    var scrollValue = $(window).scrollTop();
    $(document).scroll( function() {
      if(Math.abs($(document).scrollTop() - scrollValue) >= 500){
        scrollValue = $(document).scrollTop();
        // checkOffset();
      }
      });
    // Run function on Clicking
    $('.nav-item a').click(function() {
        // checkOffset();
    });
  });
</script>
<?php
  if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script>alert('$message');</script>";
  }
  ?>
</head>
<body>
<section id="home" class="header sticky-top">
  <nav id="navbar" class="navbar navbar-expand-xl navbar-light"> <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"> <i class="fa fa-bars"></i> </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul id="ul" class="navbar-nav text-left">
        <li class="nav-item"> <a id="nav_home" class="nav-link active-home" href="#">Home<span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a id="nav_services" class="nav-link" href="#services">Services</a> </li>
        <li class="nav-item"> <a id="nav_rstate" class="nav-link" href="real_estate.html">Real E-State Marketing</a> </li>
        <li class="nav-item"> <a id="nav_ourcli" class="nav-link" href="#our_clients">Our Clients</a> </li>
        <li class="nav-item"> <a id="nav_aboutus" class="nav-link" href="#about_us">About Us</a> </li>
        <li class="nav-item"> <a id="nav_contactus" class="nav-link" href="#contact_us">Contact Us</a> </li>
      </ul>
    </div>
  </nav>
</section>
<section class="welcome">
  <div class="parallax" style="background-image: url('images/img1.jpg')">
    <div class="container">
      <h1>WELCOME</h1>
      <hr>
      <h2>Enhance your<br>
        Business</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h4>Deliver a digital strategy with measurable<br>
            performance that grows your brand and <br>
            your vision.</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-right"> <a href="#contact_us">
          <button>Let's Talk</button>
          </a> </div>
      </div>
    </div>
  </div>
</section>
<section id="services"  class="digital-marketing">
  <div class="parallax" style="background-image: url('images/img27.png')">
    <div class="container">
      <h2>Digital Marketing Services</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12"> <img alt="Failed to load image!" class="img-fluid" src="images/img9.png"> </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h4>Achieve your business objectives and goals using the online channels</h4>
        </div>
      </div>
      <div class="text-center"> <a id="downArrow" onclick="expandCardView()" title="Click Here!">
        <div class="arrow arrow-down" id="cardView1on"> <span></span> <span></span> <span></span> </div>
        <div class="arrow arrow-up" id="cardView1off"> <span></span> <span></span> <span></span> </div>
        </a> </div>
    </div>
  </div>
</section>
<section id="services_section">
  <section class="services">
    <div class="container">
      <div class="row services1">
        <div class=""> <img alt="Failed to load image!" class="img-fluid" src="images/img2.png"> </div>
        <div class="services1-2">
          <h4>Google Ads</h4>
          <hr>
          <p>AdWords is excellent for highly targeted, measurable and rapid results that lend well to lead and sales generation<br>
            <br>
            Google Ads hit the customers at the same time when they are searching for the services related to your business. The optimized Ad campaign will make your ad appear on the front page. Hence, the ad will attract the relevant traffic for your website and you can easily get conversions. Whether you're looking to bring in new website visitors, grow online sales, get the phones ringing or keep customers coming back for more, Google Ads can help.</p>
        </div>
      </div>
      <div id="cardView1" class="cardView1">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img3.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Google Search Ads</h2>
                <hr>
                <p>Would you like to make sure your website comes up when people search for certain keywords? With Google Search Ads, we ensure that your website appears in searches relevant to your product or service.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img4.jpg" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Display Advertising</h2>
                <hr>
                <p>With Display Ads your target group will see your advertisements when browsing the web in their freetime, not just when searching particular keywords. Increase your brand awareness and traffic with display ads marketed to audiences and channels of your choice.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img5.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Remarketing</h2>
                <hr>
                <p>Has someone visited your website but left without buying anything? With remarketing (also called retargeting), you can increase the chances of "cart abandoners" returning to your website.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img6.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Google Shopping</h2>
                <hr>
                <p>A must for online shops, Shopping Ads allow you to display your products to people looking to buy online. Google Shopping is very lucrative in Germany, the latest being one of the world's largest e-commerce markets.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img7.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Campaign Audit</h2>
                <hr>
                <p>Are you spending too much on Google Ads and not getting the results you were hoping for? With a Google Ads Audit, we analyse your account and provide you with a comprehensive report and recommendations for improvement</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img8.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Campaign Optimization</h2>
                <hr>
                <p>Are your Google Ads campaigns running but in need of increased traffic and conversions? We can optimize your existing campaigns in terms of structure, settings and language to meet your goals.</p>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="seo">
    <div class="container text-center">
      <h3>Search Engine Optimization</h3>
      <h4>SEO helps small business owners create fast, robust, and user-friendly websites that rank higher in search engines</h4>
      <div class="cardView1">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img28.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">SEO Audit</h2>
                <hr>
                <p>Do you have a great website that still isn’t getting much traffic or leads? With our SEO Audit you will get a comprehensive overview of technical factors that affect ranking and really matter to organic rankings.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img29.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">SEO OnPage</h2>
                <hr>
                <p>SEO OnPage optimization includes all internal factors and aspects of your website which have a huge impact on your website's ranking.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img30.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Keyword Research</h2>
                <hr>
                <p>Knowing what your target audience searches on Google is fundamental in any successful SEO strategy. Our keyword research will analyse all keyword variations and monthly search volumes relevant to your business.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img31.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">SEO OffPage</h2>
                <hr>
                <p>SEO OffPage refers to the external factors that affect a website's ranking. Common examples include link building (backlinks) and Social Signals originating from social media. We advise you on how to obtain high quality backlinks.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img32.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">SEO Content Writing</h2>
                <hr>
                <p>Content is King. High quality content is the key to successfully converting visitors to buyers. In 2020, search engines like Google and Bing are able to perfectly distinguish good content from bad content. We create SEO content your visitors and Google will love.</p>
              </section>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="skill-card">
              <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img33.png" alt="HTML5 Logo"/></header>
              <section class="skill-card__body">
                <h2 class="skill-card__title">Local SEO</h2>
                <hr>
                <p>A tax advisor from Pune wants to make sure potential clients from his district will find him when searching for local tax advisors online. With Local SEO techniques, we help businesses improve their visibility to searchers from within their local community.</p>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="social-media">
    <div class="parallax" style="background-image: url('images/img34.jpg')">
      <div class="container text-center">
        <h2>Social Media Marketing</h2>
        <h4>Your Business is unique and so our approach to<br>
          your social media management reflect this</h4>
        <div class="social-media-images"> <img alt="Failed to load image!" class="img-fluid" src="images/img23.png"> <img class="img-fluid"  alt="Failed to load image!" src="images/img24.png"> <img alt="Failed to load image!" class="img-fluid" src="images/img25.png"> <img alt="Failed to load image!" class="img-fluid" src="images/img26.png"> <img alt="Failed to load image!" class="img-fluid" src="images/img49.png"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row text-center social-media-card">
        <div class="col-lg-4 col-md-6 col-sm-12"> <img alt="Failed to load image!" class="img-fluid" src="images/img44.jpg"> </div>
        <div class="col-lg-4 col-md-6 col-sm-12"> <img alt="Failed to load image!" class="img-fluid" src="images/img45.jpg"> </div>
        <div class="col-lg-4 col-md-6 col-sm-12"> <img alt="Failed to load image!" class="img-fluid" src="images/img43.jpg"> </div>
      </div>
    </div>
  </section>
</section>
<section class="website-design">
  <div class="container text-center">
    <h3>Web Designing &amp; Publishing</h3>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12"> <img alt="Failed to load image!" class="img-fluid" src="images/img10.png"> </div>
      <div class="col-lg-6 col-md-6 col-sm-12 web-dsg">
        <h5>By having a online presence through your <b>website</b>, You are able to reach more consumers. The more consumers you reach online, the more opportunities to <b>grow your business</b></h5>
        <h5>A beautifully designed and effective <b>website</b> is extremely important. At <b>Kaizen Infotek</b> we take care of your work.</h5>
        <img alt="Failed to load image!" class="img-fluid" src="images/img11.png"> </div>
    </div>
    <div class="cardView1">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="skill-card">
            <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img35.png" alt="HTML5 Logo"/></header>
            <section class="skill-card__body">
              <h2 class="skill-card__title">Web Designing</h2>
              <hr>
              <p>Web Designing is a modern way to promote your business and organization at Kaizen Infotek we take care of your work.</p>
            </section>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="skill-card">
            <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img36.png" alt="HTML5 Logo"/></header>
            <section class="skill-card__body">
              <h2 class="skill-card__title">Web Development</h2>
              <hr>
              <p>Here we provide you a powerful medium to let your work into digital modernity.</p>
            </section>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="skill-card">
            <header class="skill-card__header"><img class="skill-card__icon img-fluid" src="images/img37.png" alt="HTML5 Logo"/></header>
            <section class="skill-card__body">
              <h2 class="skill-card__title">Web Publishing</h2>
              <hr>
              <p>Web Publishing makes your work enrich and attract your work to millions of audience.</p>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="our_clients" class="our-clients">
  <div class="container text-center">
    <h2>Our Clients</h2>
    <div class="row">
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img14.jpg"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img15.png"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img16.jpg"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img17.jpg"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img18.png"> </div>
    </div>
    <div class="row">
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img19.jpg"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img20.jpg"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img21.png" style="padding-top: 50px;"> </div>
      <div class="col"> <img alt="Failed to load image!" class="img-fluid" src="images/img22.png"> </div>
    </div>
  </div>
</section>
<section class="review-box">
  <div class="container">
    <h2>Our Customer's Review</h2>
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item review-item active"> <img alt="Failed to load image!" src="images/p1.jpg">
            <div class="carousel-caption caption2">
              <h6>Premanand Kachate</h6>
              <small>Regional Manager, LIC PCMC</small>
              <p> I got extraordinary results by abhijeet for my business. KAIZEN IS THE RIGHT CHOICE FOR DIGITAL MARKETING.. 🌹🌹</p>
            </div>
          </div>
          <div class="carousel-item review-item"> <img alt="Failed to load image!" src="images/p2.jpg">
            <div class="carousel-caption caption2">
              <h6>Anil Mane</h6>
              <small>CEO, Shree Developers</small>
              <p>Kaizen Infotek provides result oriented digital marketing with transparency. One of the best company for lead generation.</p>
            </div>
          </div>
          <div class="carousel-item review-item"> <img alt="Failed to load image!" src="images/profile.png">
            <div class="carousel-caption caption2">
              <h6>Kiran Raut</h6>
              <small>Owner, Padmaavati Developers</small>
              <p>As a startup, you need to find a marketing partner who can help you connect to the right people. Kaizen Infotek playing that role very well.</p>
            </div>
          </div>
          <div class="carousel-item review-item"> <img alt="Failed to load image!" src="images/profile.png">
            <div class="carousel-caption caption2">
              <h6>Ganesan Iyer</h6>
              <small>Owner, Propuniverse</small>
              <p>Good marketing, quality leads, prompt action, better services, good knowledge of market (real estate)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about_us" class="about-us">
  <div class="container text-center">
    <h2>About Us</h2>
    <h4><b>Vision</b> - Creating opportunities to enhance online business<br>
      <br>
      <b>Mission</b> - Being results driven and customer focused with transparent and honest solutions.<br>
      <br>
      At <b>Kaizen Infotek</b> we spend time getting to know your business so we can deliver any online<br>
      solutions that grows your brand and your vision.<br>
      We take great pride in knowing our company, our software and our people will help you
      achieve these goals.</h4>
  </div>
</section>
<section id="contact_us" class="contact_us">
  <div class="container text-center">
    <h2>Contact Us</h2>
    <h5>Hurry Up! Contact us to grow your business.</h5>
    <form name="contact_us_form" class="contact_us_form" action="contact_us.php" method="post" onSubmit="return validate()">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <input type="text" name="name" placeholder="Name">
          <br>
          <input type="text" name="company-name" placeholder="Company Name">
          <br>
          <input type="text" name="email-id" placeholder="Email">
          <br>
          <input type="text" name="contact-no" placeholder="Contact Number">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <textarea name="message" placeholder="Message" rows="8"></textarea>
        </div>
      </div>
      <div class="text-center">
        <input type="submit" id="sub_btn" name="submit">
      </div>
    </form>
  </div>
</section>
<section class="footer">
  <div class="container">
    <div class="row add">
      <div class="col-lg-6 col-sm-12 add-text">
        <h4>Kaizen Infotek<br>
          Mahalaxmi vihar<br>
          Vishrantwadi<br>
          411015.<br>
          <br>
          <span class="font2"> Email ID : <a>info@kaizeninfotek.com</a><br>
          Contact No : +91 83810 71017 </span> </h4>
      </div>
      <div class="col-lg-6 col-sm-12 add-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.0506239566826!2d73.87592471489351!3d18.57175628737922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1bf69a03aab%3A0xeba37fd3ca871d0a!2sKaizen%20Infotek%20%7C%20Digital%20Marketing%20In%20Pune%20%7C%20Best%20Digital%20Marketing%20Company%20%7C%20SEO%20%7C%20Google%20Ads%20%7C%20Social%20Media%20Marketing!5e0!3m2!1sen!2sin!4v1577446472100!5m2!1sen!2sin" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="text-center footer1">
      <div> <img alt="Failed to load image!" class="img-fluid" src="images/img23.png"> <img alt="Failed to load image!" class="img-fluid" src="images/img24.png"> <img alt="Failed to load image!" class="img-fluid" src="images/img25.png"> <img alt="Failed to load image!" class="img-fluid" src="images/img26.png"> </div>
      <p>Copyright © 2020 · All Rights Reserved by Kaizen Infotek</p>
      <div class="footer-bottom"><a href="privacy_policy.html">Privacy &amp; Policy</a> <a href="terms_and_conditions.html">Terms &amp; Conditions</a> <a href="credits.html">Credits</a></div>
    </div>
  </div>
</section>
<script src="js/js1.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
