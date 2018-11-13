<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Footsteps | Chingford</title>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../CSS/index.css">
<link rel="stylesheet" type="text/css" href="../CSS/slideshow.css">



    <header>
      <div class="col-mid-6">
        <h1><img src="Images/logo.gif"><span class="highlight">FOOTSTEPS</span> NURSERY - CHINGFORD</h1>

        <div class="current-nav">
          <nav>
            <ul>
              <li class="current"><a href="index.html">Chingford</a></li>
              <li><a href="../Walthamstow/index.html">Walthamstow</a></li>
              <li><a href="../Leytonstone/index.html">Leytonstone</a></li>
            </ul>
          </nav>
        </div>

</div>
<nav class="navbar navbar-default" role="navigation" style="background: #f5f5f5; border:none; padding-top:10px;">
    <div class="container">

        <div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1 ">
            <ul class="nav navbar-nav ">
                <li><a href="index.html">Home</a></li>
                <li><a href="policies.html">Policies</a></li>
                <li><a href="staff.html">Recruitment</a></li>
                <li><a href="fees.html">Fees</a></li>
                <li class="current"><a href="contact_us.html">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
   </header>


   <section id="content">

	<div class="map">
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9917.764586676998!2d0.09977017184689792!3d51.57847779721731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a418b61e36f5%3A0xd2669be91de28f44!2sFootsteps+Day+Nursery%3A+Newbury+Park!5e0!3m2!1sen!2suk!4v1413927512824"></iframe>-->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2476.4935685310907!2d0.006482299999999999!3d51.632485499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a7685e8f7cc324c!2sFootsteps+Nursery+Chingford!5e0!3m2!1sen!2sus!4v1442228691144" frameborder="0" style="border:0"></iframe>
	</div>
  <?php include('enquiry_form.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling out the <strong>contact form below</strong></h4>
				<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 * Please fill all required form field, thanks!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Enter your full name" value="<?= $name ?>" autofocus>
              <span class="error"><?= $name_error ?></span>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" value="<?= $email ?>" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email">
              <span class="error"><?= $email_error ?></span>
							<div class="validation">
							</div>
						</div>
            <div class="col-lg-4 field">
							<input type="text" name="postcode" value="<?= $postcode ?>" placeholder="Enter your postcode" data-rule="maxlen:4" data-msg="Please enter at least 4 chars">
              <span class="error"><?= $postcode_error ?></span>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="phone" value="<?= $phone ?>" placeholder="Enter your phone number" data-rule="maxlen:4" data-msg="Please enter at least 4 chars">
              <span class="error"><?= $phone_error ?></span>
							<div class="validation">
							</div>
						</div>

						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" value="<?= $message ?>" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
                <div class="container-fluid" style="padding:0; float:left; margin-top: 20px;">
                <form method="get" action="doc/Admissions Policy.pdf" target="_blank">
                 <button name="submit" type="submit" class="button_1" style="display:inline;">Submit message</button><h5 style="display:inline"><a href="recruitment_form.html" style="text-decoration:none; color:#000000;">    Click here for the <span class="highlight">Recruitment Form</span></a></h5>

                </form>
              </div>
              <div class="col-mid-6">
              <p class="form-warning" style="max-width: 100ch; float:right; padding-top:20px; margin:0; display:inline;"></p>
            </div>
              </p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-46693394-3', 'auto');
  ga('send', 'pageview');

</script>
<footer>
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5><span class="highlight">Get in touch with us</span></h5>
        <ul class="list-unstyled quick-links">
          <p>Footsteps Day Nursery: Chingford</p>
          <p>64b Station Road,</p>
          <p>Chingford,</p>
          <p>London, E4 7BA.</p>
          <p>Chingford@footsteps-nurseries.com</p>
          <p style="font-weight: bold;">020 3583 5741</p>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5><span class="highlight">Site Map</span></h5>
        <ul class="list-unstyled quick-links">
          <li><a href="index.html"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="policies.html"><i class="fa fa-angle-double-right"></i>Policies</a></li>
          <li><a href="staff.html"><i class="fa fa-angle-double-right"></i>Recruitment</a></li>
          <li><a href="fees.html"><i class="fa fa-angle-double-right"></i>Fees</a></li>
          <li><a href="contact_us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 style="border-right:3px solid #68a4c4;"><span class="highlight">Social Media</span></h5>
        <ul class="list-unstyled quick-links">
          <li><a href="https://www.facebook.com/FootstepsChingford/" target="_blank" ><i class="fa fa-angle-double-right"></i><img src="Images/facebook_logo.png" style="width: 30px; height:30px;"></img></a></li>


        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p></p>
        <p class="h6">&copy; Footsteps Nurseries 2008-2018. All right reserved.</p>
      </div>
      </hr>
    </div>
  </div>
</section>
   </footer>

  </body>

</html>
