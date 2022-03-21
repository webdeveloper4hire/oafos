<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Services | DENR</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="page-header no-margin no-padding">
    <div class="no-margin no-padding">
      <img src="img/banner.png" class="img-responsive">
  </div>

<!-- Start of navigation bar -->
<nav class="navbar nav-size navbar-default navbar-custom navbar-static-top no-padding site" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-WDM-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-lg" href="#" align="center"> E-Services </a>
 </div>
    
  <div id="wrapper" class="container">
  <div class="navbar-inner main-menu">        
  <div class="collapse navbar-collapse" id="bs-WDM-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="http://denr.gov.ph/" target="blank">DENR Website</a></li>
      <li class="active"><a href="../app/index.php">E-Services</a></li>
      <li><a href="../app/about.php">About</a></li> 
      <li><a href="../app/faq.php">FAQs</a></li>
      <li><a href="../app/contact.php">Contact Us</a></li>
    </ul> 
  </li>
</ul>
</div>
</div>
</nav>
<!-- End of navigation bar -->

 <div class='container'>
    <div class='panel panel-info dialog-panel'>
    <!--<div class="no-margin no-padding">
      <img src="img/header11.png" class="img-responsive">
    </div>-->
      <div class='panel-heading'>
        <h4><p style="color:#1565B2;font-size:100%">Welcome to DENR E-Services!</h4></p>
      </div>

      <div class='panel-body'>
         <h8><p style="font-size:85%;margin-left:20px;" align="center">Please enter the code of the image. Doing so helps prevent automated programs from bots that abuse this service.</h8>

<!--- start of captcha --> 
  <div>
  <div class='col-sm-10 col-sm-push-1'>
          <div class='col-sm-8 col-sm-push-2 no-margin'><div class="hidden-md" align="center"> <img src="captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' style="border:1px solid black;"></div></div><br><br>
        <form action="captcha-validate.php" method="post" align="center">
          <br> <div class='col-sm-9 col-sm-push-1 no-margin'><div class="hidden-md" align="center"><h8><p style="font-size:85%;margin-left:20px;" align="center"><b>Enter captcha:</b></h8>
          <input type="text" name="answer"style="width:180px;" placeholder="Enter the code here" /></div></div><br>
          <input type="hidden" name="service" value="<?php echo $_GET['service']; ?>" /><br>
          <input type="button" class="btn btn-danger" onclick="window.location.href = window.location.href" value="Can't read? Try different code." /> <br><br>
  </div>
         <div class='col-sm-10 col-sm-push-1'>
         <div class='col-sm-5 col-sm-push-1 no-margin'>  <div class="hidden-md" align="center">   
            <button class='btn-lg btn-primary' onClick="history.go(-1);return true;" type="button"> << Back</button> 
            </div></div>
             <div class='col-sm-5 col-sm-push-1 no-margin'> <div class="hidden-md" align="center">
              <button class='btn-lg btn-primary' type='submit'>Proceed >> </button>
            </div></div>
          </div>     
        </form>
  </div>
<!--- end of captcha -->
</div>
</div>
</div>
<!--- start of footer --> 
<footer class="site-footer">
  <div class="container">
    <div class="row">
</div>
<div class="bottom-footer">
  <div class="col-md-8"> © Copyright 2015 Regional Office. All Rights Reserved. </div>
</footer>
<!--- end of footer --> 

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>