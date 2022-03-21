<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact | DENR</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!-- a helper script for vaidating the form-->
  <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>  
</head>
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
      <a class="navbar-brand hidden-lg" href="#"> Contact </a>
 </div>
    
  <div id="wrapper" class="container">
  <div class="navbar-inner main-menu">        
  <div class="collapse navbar-collapse" id="bs-WDM-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="http://mimaropa.denr.gov.ph/" target="blank">DENR Website</a></li>
      <li><a href="index.php">E-Services</a></li>
      <li><a href="about.php">About</a></li> 
      <li><a href="faq.php">FAQs</a></li>
      <li class="active"><a href="contact.php">Contact Us</a></li>
    </ul> 
  </li>
</ul>
</div>
</div>
</nav>
<!-- End of navigation bar -->

<!-- Start of container -->   
<div class="container">
  <div class='panel panel-info dialog-panel'>
  <div class='panel-heading'>
  <h4><b><center>Contact | DENR Regional Office </center></b></h4>
  </div>
<div class='panel-body'>

<div class="row">
	<div class="col-md-5">
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title no-shadow"> <b> Contact: </b></h4> 
    </div>
     <div class="panel-body">
    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
	<strong>DENR MIMAROPA Office </strong> <br> <br>
		<address>
1515 L&S Bldg,Roxa BLVD., Ermita, Manila,<br />
1000 Philippines<br />
<br />
Telephone: 	(02) 8249-33-67 loc 2717<br />
http://www.mimaropa.denr.gov.ph<br />
		</address>
		</div></div>
	</div>
<div class="col-md-7">
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title"><b> Contact Form: </b> </h4> 
    </div>
    <div class='panel-body'>

<form method="post" action="captcha-validate.php" role="form" id="contactform" name="myForm" onsubmit="return validateForm();">
  <div class="form-group">
      <label for="contactname">Name *</label>
    <div class="col-sm-12 no-margin">
    </div>
    <div class="col-sm-6 no-margin">
      <input type="text" name="fname" id="contactfirstname" class="form-control" placeholder="First Name">
    </div> 
    <div class="col-sm-6 no-margin">
      <input type="text" name="lname" id="contactlastname" class="form-control" placeholder="Last Name">
      <br>
    </div> 
 </div>
  <div class="form-group">
    <label for="contactemail">E-mail Address *</label>
    <div class="col-sm-12 no-margin">
    	<input type="email" name="email" class="form-control" id="contactemail" placeholder="Enter email">
    <span class="help-block input-sm">* Please enter a valid e-mail address</span>
    </div>
  </div>
  <div class="form-group">
    	<label for="contactsubject">Subject *</label>
    <div class="col-sm-12 no-margin">
    	<input type="text" name="subject" id="contactsubject" class="form-control" placeholder="Enter subject">
      <br>
    </div>
  </div> 
  <div class="form-group">
    	<label for="contactmessage">Mesage *</label> 
    <div class="col-sm-12 no-margin">  
    	<textarea class="form-control input-sm" name="message" id="contactmessage" rows="6"></textarea>
      <br>
     </div>
  </div>
  <div class="form-group">
         <label for="contactanswer">Enter the code shown:</label> <br>
      <div class="col-sm-12 no-margin">
      </div>
          <img src="captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' style="margin-left:60px;border:1px solid black;"> <br><br>
           <div class="col-sm-6 no-margin">
           <input type="text" style="width:250px;"name="answer" id="contactanswer" class="form-control" placeholder="Enter captcha here">
           </div>
          <div class="col-sm-6  no-margin">
         <a href= 'javascript:refreshCaptcha();'><button type="button" class="btn btn-danger">Can't read? Try different code. </button></a>   
         <br>
          </div>
  </div>   
  <div class="form-group">  
      <div class="col-sm-12 no-margin">
  <label class="checkbox">
              <input type="checkbox" name="copy" value="1" /> Send copy to yourself
    </label>
  </div>
  </div>

  <div class="form-group">
      <div class="col-sm-12 no-margin">
      </div>
      <div class="col-sm-12 no-margin">     
            <div class="hidden-md" align="center"><button type="submit" id="contactbtn" class="btn btn-primary" style="border:1px solid black;width:300px;height:50px;">Send Feedback</button></div>
        </div>
      <div class="col-sm-6 no-margin">
      </div>
  </div>   
</form>
</div></div>
</div>
</div>
</div>
</div>
</div>


 <!-- End of container -->           	

<!--- start of footer --> 
<footer class="site-footer">
  <div class="container">
    <div class="row">
</div>
<div class="bottom-footer">
  <div class="col-md-7"> © Copyright 2021 Regional Office. All Rights Reserved. </div>
</footer>
<!--- end of footer --> 

<script src="js/jquery.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/bootstrap.min.js"></script>

<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{

  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

<script>

function validateText(id)
{
     if($("#"+id).val()==null || $("#"+id).val()=="")
     {
      var div=$("#"+id).closest("div");
      div.removeClass("has-success");
      $("#glypcn"+id).remove();
      div.addClass("has-error has-feedback");
      div.append( '<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
      return false;
     }
     else
     {
      var div=$("#"+id).closest("div");
      div.removeClass("has-error");
      div.addClass("has-success has-feedback");
      $("#glypcn"+id).remove();
      div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback"></span>');
      return true;
     }
     
}

$(document).ready(

    function validateForm()
    {
        $("#contactbtn").click(function()
            {
               if(!validateText("contactfirstname"))
               {
                var x = document.forms["myForm"]["fname"].value;
                if (x == null || x == "") {
                alert("First name must be filled out. Click OK to try again");
                return false;
               } 
               }
               if(!validateText("contactlastname"))
               {
                var x = document.forms["myForm"]["lname"].value;
                if (x == null || x == "") {
                alert("Last name must be filled out");                
                return false;
               }  
               }                  
               if(!validateText("contactemail")){
               var x = document.forms["myForm"]["email"].value;
               var atpos = x.indexOf("@");
               var dotpos = x.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
               alert("Not a valid e-mail address");
               return false;
               }
               }
                if(!validateText("contactsubject")){
                var x = document.forms["myForm"]["subject"].value;
                if (x == null || x == "") {
                alert("Subject must be filled out");                
                return false;
               }
               }             
                if(!validateText("contactmessage")){
                var x = document.forms["myForm"]["message"].value;
                if (x == null || x == "") {
                alert("Message must be filled out");                
                return false;
               }
               } 
               if(!validateText("contactanswer")){
                var x = document.forms["myForm"]["answer"].value;
                alert("Please enter the captcha.");                
                return false;
                }
if(!isset($hasError)) {
  $emailTo = 'myemail@domain.com'; // Put your own email address here
  $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nSite:  \n\nComments:\n $comments";
  $headers = 'From: BTSyncrets Contact <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

// Add this
  if (isset($_POST['copy'])) {
      $headers .= "\nBcc: myemailaddress@example.com";
  }

  mail($emailTo, $subject, $body, $headers);
  $emailSent = true;
} 
               }        
               $("form#contactform").submit();
           });
    }

);


</script>

</body>

</html>

