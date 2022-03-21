<?php
/* captcha-validate file */

session_start();

if(strtolower($_POST['answer']) == $_SESSION['captcha']){
	echo "</div></td></tr></table></div><div id=\"I567\" style=\"display:block;clear: both;text-align:left;\" scrolling=\"no\" class=\"HTML_Default\"> \n"; 
	echo "    <div id=\"I567_html\"><div id=\"I301\" style=\"display:block;clear: both;text-align:left;\" class=\"HTML_Default\" scrolling=\"no\"><div id=\"I301_html\">\n"; 
	echo "      <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>\n"; 
	echo "      <script type=\"text/javascript\">setTimeout(\"$('#loading').fadeOut(100);\", 2000);  </script>\n"; 
	echo "      <style type=\"text/css\">  #loading {position:absolute;top:0;left:0;padding-top:80px;text-align:center;background-color:white;background-repeat: no-repeat;width:100%; height:100%;color:black; z-index:9000;} </style>\n"; 
	echo "      <div id=\"loading\" ><img src=\"img/loader.gif\"></div></div></div> \n"; 
	echo "</div>\n";
	echo "<script>
	window.location.href='add-".$_POST['service'].".php?database=eservices&service=".$_POST['service']."';
	</script>";
}
else {
    echo "<script>alert('Incorrect captcha.Click OK to try again.');
	
window.location.href='captcha-form.php?database=eservices&service=".$_POST['service']."';
	</script>";
}
unset($_SESSION['captcha']);	
?>

