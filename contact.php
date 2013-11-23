<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="We are a consulting company specailizing in Robotics, Web Design, Printed Circuit Boards, Circuit design, and Android app development."><meta name="author" content="Rohan Agrawal">
  <link rel="shortcut icon" href="images/favicon.png"><title>Aleopile</title><link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="css/aleopile.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]--></head>
  <body style="background-image:url(images/sos.png);">
    <div class="navbar-wrapper"><div class="container"><div class="navbar navbar-inverse navbar-fixed-top" role="navigation"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#"><img src="images/favicon.png" style="height:32px; margin:-6px 0px;"/>Aleopile</a></div><div class="navbar-collapse collapse"><ul class="nav navbar-nav"><li><a href="index.html">Home</a></li><li><a href="about.html">About</a></li><li class="active"><a href="contact.php">Contact</a></li></ul></div></div></div></div></div>

  <!-- Page Content -->

  <div class="container">

    <div class="row">
      <div class="col-sm-8">
        <h3>Let's Get In Touch!</h3>
        <?php

                // check for a successful form post
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

                // check for a form error
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";

        ?>
        <form role="form" method="POST" action="contact-form-submission.php">
         <div class="row">
           <div class="form-group col-lg-4">
             <label for="input1">Name</label>
             <input type="text" name="contact_name" class="form-control" id="input1">
           </div>
           <div class="form-group col-lg-4">
             <label for="input2">Email Address</label>
             <input type="email" name="contact_email" class="form-control" id="input2">
           </div>
           <div class="form-group col-lg-4">
             <label for="input3">Phone Number</label>
             <input type="phone" name="contact_phone" class="form-control" id="input3">
           </div>
           <div class="clearfix"></div>
           <div class="form-group col-lg-12">
             <label for="input4">Message</label>
             <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
           </div>
           <div class="form-group col-lg-12">
             <input type="hidden" name="save" value="contact">
             <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </div>
       </form>
     </div>

     <div class="col-sm-4">
      <h3>Aleopile</h3>
      <h4>A Consulting Company</h4>
      <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: (408) 837-2013</p>
      <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="rohan@aleopile.com">rohan@aleopile.com</a></p>
      <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 3:30 PM to 8:00 PM Saturday - Sunday: 10 AM to 9:00 PM PST</p>
      <ul class="list-unstyled list-inline list-social-icons">
        <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/aleopile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <!-- <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li> -->
        <li class="tooltip-social twitter-link"><a href="https://twitter.com/Aleopile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/102603553828858438695/posts" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
      </ul>
    </div>

  </div><!-- /.row -->

</div><!-- /.container -->

<div class="container">

  <hr>

  <div class="row" style="padding: 15px;">
      <div class="g-plusone" data-size="medium"></div>
      <a href="https://twitter.com/aleopile" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @aleopile</a>
      <div class="fb-like" data-href="https://facebook.com/aleopile" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    </div>
    <!-- FOOTER -->
    <footer>
      <!-- <p class="pull-right"><a href="#">Back to top</a></p> -->
      <p class="pull-right"><a href="#"> &middot; Back to top</a></p>
      <p>&copy; 2013 Aleopile &middot; <!-- <a href="#">Privacy</a> &middot; <a href="#">Terms</a> --></p>
    </footer>

</div><!-- /.container -->
<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  <!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/jquery.lazyload.min.js" type="text/javascript"></script>
  <script type="text/javascript" charset="utf-8">
  $(function() {
     $("img.lazy").lazyload({
         effect : "fadeIn"
     });
  });
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45380875-1', 'aleopile.com');
    ga('send', 'pageview');

  </script>
</body>
</html>