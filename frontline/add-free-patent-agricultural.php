<?php require_once('../Connections/connection.php'); ?>
<?php 
date_default_timezone_set("Asia/Hong_Kong"); 
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO table1 (table1_id, tb1_colunm1, tb1_colunm2, tb1_colunm3, tb1_colunm4, tb1_colunm5, tb1_colunm6, tb1_colunm7, tb1_colunm8, tb1_colunm9, tb1_colunm10, tb1_colunm11, tb1_colunm12, tb1_colunm13, tb1_colunm14, tb1_colunm15, tb1_colunm16, tb1_colunm17, tb1_colunm18, tb1_colunm19, tb1_colunm20, tb1_colunm21, tb1_colunm22, tb1_colunm23, tb1_colunm24, tb1_colunm25, tb1_colunm26, tb1_colunm27, tb1_colunm28, tb1_colunm29, tb1_colunm30, tb1_colunm31, tb1_colunm32, tb1_colunm33, tb1_colunm34, tb1_colunm35, tb1_colunm36, tb1_colunm37, tb1_colunm38, tb1_colunm39, tb1_colunm40, tb1_colunm41, tb1_colunm42, tb1_colunm43, tb1_colunm44, tb1_colunm45, tb1_colunm46, tb1_colunm47, tb1_colunm48, tb1_colunm49, tb1_colunm50, tb1_colunm51, tb1_colunm52, tb1_colunm53, tb1_colunm54, tb1_colunm55, tb1_colunm56, tb1_colunm57, tb1_colunm58, tb1_colunm59, tb1_colunm60, tb1_colunm61, tb1_colunm62, tb1_colunm63, tb1_colunm64, tb1_colunm65, tb1_colunm66, tb1_colunm67, tb1_colunm68, tb1_colunm69, tb1_colunm70, tb1_colunm71, tb1_colunm72, tb1_colunm73, tb1_colunm74, tb1_colunm75, tb1_colunm76, tb1_colunm77, tb1_colunm78, tb1_colunm79, tb1_colunm80, tb1_colunm81, tb1_colunm82, tb1_colunm83, tb1_colunm84, tb1_colunm85, tb1_colunm86, tb1_colunm87, tb1_colunm88, tb1_colunm89, tb1_colunm90, tb1_colunm91, tb1_colunm92, tb1_colunm93, tb1_colunm94, tb1_colunm95, tb1_colunm96, tb1_colunm97, tb1_colunm98, tb1_colunm99, tb1_colunm100) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['table1_id'], "int"),
                       GetSQLValueString($_POST['tb1_colunm1'], "text"),
                       GetSQLValueString($_POST['tb1_colunm2'], "text"),
                       GetSQLValueString($_POST['tb1_colunm3'], "text"),
                       GetSQLValueString($_POST['tb1_colunm4'], "text"),
                       GetSQLValueString($_POST['tb1_colunm5'], "text"),
                       GetSQLValueString($_POST['tb1_colunm6'], "text"),
                       GetSQLValueString($_POST['tb1_colunm7'], "text"),
                       GetSQLValueString($_POST['tb1_colunm8'], "text"),
                       GetSQLValueString($_POST['tb1_colunm9'], "text"),
                       GetSQLValueString($_POST['tb1_colunm10'], "text"),
                       GetSQLValueString($_POST['tb1_colunm11'], "text"),
                       GetSQLValueString($_POST['tb1_colunm12'], "text"),
                       GetSQLValueString($_POST['tb1_colunm13'], "text"),
                       GetSQLValueString($_POST['tb1_colunm14'], "text"),
                       GetSQLValueString($_POST['tb1_colunm15'], "text"),
                       GetSQLValueString($_POST['tb1_colunm16'], "text"),
                       GetSQLValueString($_POST['tb1_colunm17'], "text"),
                       GetSQLValueString($_POST['tb1_colunm18'], "text"),
                       GetSQLValueString($_POST['tb1_colunm19'], "text"),
                       GetSQLValueString($_POST['tb1_colunm20'], "text"),
                       GetSQLValueString($_POST['tb1_colunm21'], "text"),
                       GetSQLValueString($_POST['tb1_colunm22'], "text"),
                       GetSQLValueString($_POST['tb1_colunm23'], "text"),
                       GetSQLValueString($_POST['tb1_colunm24'], "text"),
                       GetSQLValueString($_POST['tb1_colunm25'], "text"),
                       GetSQLValueString($_POST['tb1_colunm26'], "text"),
                       GetSQLValueString($_POST['tb1_colunm27'], "text"),
                       GetSQLValueString($_POST['tb1_colunm28'], "text"),
                       GetSQLValueString($_POST['tb1_colunm29'], "text"),
                       GetSQLValueString($_POST['tb1_colunm30'], "text"),
                       GetSQLValueString($_POST['tb1_colunm31'], "text"),
                       GetSQLValueString($_POST['tb1_colunm32'], "text"),
                       GetSQLValueString($_POST['tb1_colunm33'], "text"),
                       GetSQLValueString($_POST['tb1_colunm34'], "text"),
                       GetSQLValueString($_POST['tb1_colunm35'], "text"),
                       GetSQLValueString($_POST['tb1_colunm36'], "text"),
                       GetSQLValueString($_POST['tb1_colunm37'], "text"),
                       GetSQLValueString($_POST['tb1_colunm38'], "text"),
                       GetSQLValueString($_POST['tb1_colunm39'], "text"),
                       GetSQLValueString($_POST['tb1_colunm40'], "text"),
                       GetSQLValueString($_POST['tb1_colunm41'], "text"),
                       GetSQLValueString($_POST['tb1_colunm42'], "text"),
                       GetSQLValueString($_POST['tb1_colunm43'], "text"),
                       GetSQLValueString($_POST['tb1_colunm44'], "text"),
                       GetSQLValueString($_POST['tb1_colunm45'], "text"),
                       GetSQLValueString($_POST['tb1_colunm46'], "text"),
                       GetSQLValueString($_POST['tb1_colunm47'], "text"),
                       GetSQLValueString($_POST['tb1_colunm48'], "text"),
                       GetSQLValueString($_POST['tb1_colunm49'], "text"),
                       GetSQLValueString($_POST['tb1_colunm50'], "text"),
                       GetSQLValueString($_POST['tb1_colunm51'], "text"),
                       GetSQLValueString($_POST['tb1_colunm52'], "text"),
                       GetSQLValueString($_POST['tb1_colunm53'], "text"),
                       GetSQLValueString($_POST['tb1_colunm54'], "text"),
                       GetSQLValueString($_POST['tb1_colunm55'], "text"),
                       GetSQLValueString($_POST['tb1_colunm56'], "text"),
                       GetSQLValueString($_POST['tb1_colunm57'], "text"),
                       GetSQLValueString($_POST['tb1_colunm58'], "text"),
                       GetSQLValueString($_POST['tb1_colunm59'], "text"),
                       GetSQLValueString($_POST['tb1_colunm60'], "text"),
                       GetSQLValueString($_POST['tb1_colunm61'], "text"),
                       GetSQLValueString($_POST['tb1_colunm62'], "text"),
                       GetSQLValueString($_POST['tb1_colunm63'], "text"),
                       GetSQLValueString($_POST['tb1_colunm64'], "text"),
                       GetSQLValueString($_POST['tb1_colunm65'], "text"),
                       GetSQLValueString($_POST['tb1_colunm66'], "text"),
                       GetSQLValueString($_POST['tb1_colunm67'], "text"),
                       GetSQLValueString($_POST['tb1_colunm68'], "text"),
                       GetSQLValueString($_POST['tb1_colunm69'], "text"),
                       GetSQLValueString($_POST['tb1_colunm70'], "text"),
                       GetSQLValueString($_POST['tb1_colunm71'], "text"),
                       GetSQLValueString($_POST['tb1_colunm72'], "text"),
                       GetSQLValueString($_POST['tb1_colunm73'], "text"),
                       GetSQLValueString($_POST['tb1_colunm74'], "text"),
                       GetSQLValueString($_POST['tb1_colunm75'], "text"),
                       GetSQLValueString($_POST['tb1_colunm76'], "text"),
                       GetSQLValueString($_POST['tb1_colunm77'], "text"),
                       GetSQLValueString($_POST['tb1_colunm78'], "text"),
                       GetSQLValueString($_POST['tb1_colunm79'], "text"),
                       GetSQLValueString($_POST['tb1_colunm80'], "text"),
                       GetSQLValueString($_POST['tb1_colunm81'], "text"),
                       GetSQLValueString($_POST['tb1_colunm82'], "text"),
                       GetSQLValueString($_POST['tb1_colunm83'], "text"),
                       GetSQLValueString($_POST['tb1_colunm84'], "text"),
                       GetSQLValueString($_POST['tb1_colunm85'], "text"),
                       GetSQLValueString($_POST['tb1_colunm86'], "text"),
                       GetSQLValueString($_POST['tb1_colunm87'], "text"),
                       GetSQLValueString($_POST['tb1_colunm88'], "text"),
                       GetSQLValueString($_POST['tb1_colunm89'], "text"),
                       GetSQLValueString($_POST['tb1_colunm90'], "text"),
                       GetSQLValueString($_POST['tb1_colunm91'], "text"),
                       GetSQLValueString($_POST['tb1_colunm92'], "text"),
                       GetSQLValueString($_POST['tb1_colunm93'], "text"),
                       GetSQLValueString($_POST['tb1_colunm94'], "text"),
                       GetSQLValueString($_POST['tb1_colunm95'], "text"),
                       GetSQLValueString($_POST['tb1_colunm96'], "text"),
                       GetSQLValueString($_POST['tb1_colunm97'], "text"),
                       GetSQLValueString($_POST['tb1_colunm98'], "text"),
                       GetSQLValueString($_POST['tb1_colunm99'], "text"),
                       GetSQLValueString($_POST['tb1_colunm100'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "redirect_print.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DENR Regional Office</title>
  
  <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href="css/style.css" rel="stylesheet">
  
  <script src='js/jquery.min.2.0.3.js' type='text/javascript'></script>
  <script src='js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src="js/index.js"></script>
  
</head>

<body>

  <div class="page-header no-margin no-padding">
    <div class="no-margin no-padding">
  </div>

  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
    <div class="no-margin no-padding">
      <img src="img/header1.png" class="img-responsive">
  </div>
      <br>
      <div class='panel-heading'>
        <h5>DENR IV-A: Apply for <?php echo $_GET['service']; ?></h5>
      </div>
      
      <div class='panel-body'>
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>" class='form-horizontal' role='form'>
    
          <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Database</label>
            <div class='col-md-6' style="display: none;">
                  <input class='form-control' type='hidden' name="tb1_colunm1" value="<?php echo $_GET['database']; ?>"></div>
          </div>
            
                        
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Service</label>
            <div class='col-md-6' style="display: none;">
                  <input class='form-control' type="hidden" name="tb1_colunm2" value="<?php echo $_GET['service']; ?>"></div>
            </div>
            
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Status</label>
            <div class='col-md-6' style="display: none;">
                  <input class='form-control' type="hidden" name="tb1_colunm3" value="0"></div>
            </div>
            
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Date</label>
            <div class='col-md-6' style="display: none;">
                  <input class='form-control' type="hidden" name="tb1_colunm4" value="<?php echo date("Y-m-d"); ?>"></div>
            </div>
           
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm5</label>
            <div class='col-md-6' style="display: none;">
                  <input class='form-control' type="hidden" name="tb1_colunm5" value=""></div>
            </div>
          
<div align="justify">
<h3>Please fill-up the form below.</h3>
 
<p>1. I HEREBY make application for a free patent to the following described tract of a agricultural public land under the provisions of Chapter VII of Commonwealth Act No. 141, as amended or Republic Act No. 782 OR P.D No. 1073 or Ra 6940, (if the land is a subdivision or cadastral lot, mention the lot and survey number) :</p></div>
            
                  <input class='form-control' type="text" name="tb1_colunm18" value="">
          
             <div align="justify" style="font: x-small"> 
    <p>situated in a Sitio of 
           
            <input class='submit' type="text" name="tb1_colunm13" value="" placeholder="Sitio">
             
               Barrio of ,
            <input class='submit' type="text" name="tb1_colunm14" value="">
         
        Municipality of 
            <input class='submit' type="text" name="tb1_colunm15" value="" required>
                  
                  Province of ,
             <input class='submit' type="text" name="tb1_colunm16" value="" required>
           
          Island of
             <input class='submit' type="text" name="tb1_colunm17" value="">
           
          Philippines, and containing in area of 
             <input class='submit' type="text" name="tb1_colunm60" value="">
            hectares, 
             <input class='submit' type="text" name="tb1_colunm61" value="">
          area, and 
             <input class='submit' type="text" name="tb1_colunm62" value=""> hectares, a sketch of which is atteached.</p></div>
           
          
            <p>&nbsp;</p>
            <div align="justify"><p>
            2. My name is
             <input class='submit' type="text" name="tb1_colunm6" value="" placeholder="Lastname" required>
             <input class='submit' type="text" name="tb1_colunm7" value="" placeholder="Firstname" required>
             <input class='submit' type="text" name="tb1_colunm8" value="" placeholder="Middlename" required>
             <input class='submit' type="text" name="tb1_colunm9" value="" placeholder="Name Extension">
             my post-office address is ;
             <input class='submit' type="text" name="tb1_colunm63" value="">
         my age is
             <input class='submit' type="text" name="tb1_colunm64" value="">
           years; my birthplace is 
             <input class='submit' type="text" name="tb1_colunm19" value="">
           ; I am naturally born citizen of 
             <input class='' type="text" name="tb1_colunm20" value=""> 
            ; my civil status is (if married, state name, birthplace, citizenship, and residence-address of spouse);
                  <input class='form-control' type="text" name="tb1_colunm21" value="">
           The name of my father is 
                  <input class='submit' type="text" name="tb1_colunm22" value="">
            a citizen of
                  <input class='submit' type="text" name="tb1_colunm23" value="">	
         .The following are my near relatives (state their name and relation to the applicant such as parents, children brother, etc. if children, give their ages.):
                  <input class='form-control' type="text" name="tb1_colunm24" value=""></div></p>
              <div align="justify"><p>
    3. I am not the owner of more than 12 hectares of land.<p>&nbsp;</p>
4. I am not a CARP beneficiary.
<p>&nbsp;</p>
5. The land described and applied for not claimed or occupiedby another person but is public land land which was first occupied and cultivated by
                  <input class='submit' type="text" name="tb1_colunm25" value="">
            on
                  <input class='submit' type="text" name="tb1_colunm26" value="">
     					 &
                  <input class='submit' type="text" name="tb1_colunm27" value="">
           . I entered upon and began cultivation of the same on the
                  <input class='submit' type="text" name="tb1_colunm28" value="">
            day of 
                  <input class='submit' type="text" name="tb1_colunm29" value="">
           			 Year
                  <input class='submit' type="text" name="tb1_colunm30" value="">
           ,and since that date I have continously cultivated the land; and have made thereon the following improvements:
                  <input class='form-control' type="text" name="tb1_colunm31" value=""></div></p>            
              
            <div align="justify"><p>
        6. The land applied for was entered upon, cultivated and occuiped on or about the
                  <input class='submit' type="text" name="tb1_colunm32" value="">
           day of
                  <input class='submit' type="text" name="tb1_colunm33" value="">
           19
                  <input class='submit' type="text" name="tb1_colunm34" value="">
          , by
                  <input class='submit' type="text" name="tb1_colunm35" value="">
           who was my
                  <input class='submit' type="text" name="tb1_colunm36" value=""> 
            .My said ancentor died on the 
                  <input class='submit' type="text" name="tb1_colunm37" value="">
         day of
            
                  <input class='submit' type="text" name="tb1_colunm38" value="">
          19
                  <input class='submit' type="text" name="tb1_colunm39" value="">
            at
                  <input class='submit' type="text" name="tb1_colunm40" value="">
            province of 
                  <input class='submit' type="text" name="tb1_colunm41" value="">
           on the
                  <input class='submit' type="text" name="tb1_colunm42" value="">
            day of 
                  <input class='submit' type="text" name="tb1_colunm43" value="">
            19
                  <input class='submit' type="text" name="tb1_colunm44" value="">
           Evidence of relationship, death, burail, and heirship is hereto attached and consist of 
                  <input class='form-control' type="text" name="tb1_colunm45" value="">
          . The following are the names and addresses of the heirs of my ancestor 
                  <input class='form-control' type="text" name="tb1_colunm46" value="">
          Name
                  <input class='submit' type="text" name="tb1_colunm47" value="">
           Post office Address
                  <input class='submit' type="text" name="tb1_colunm48" value=""></div></p>
          
            <div align="justify"><p>
            7. I am
                  <input class='submit' type="text" name="tb1_colunm49" value="">
          
           the only heir representative of the heirs of 
                  <input class='submit' type="text" name="tb1_colunm50" value="">
           entitiled to succeed hom according to the laws of the Philippines. <br />
8. Since the death of my said ancetor, I have cultivated the said land and existing improvements thereon consists of the following: 
                  <input class='form-control' type="text" name="tb1_colunm51" value=""></div></p>
            <p>&nbsp;</p>
            <div align="justify">
           9. The land has been continuosly occuiped and cultivated by me or my said ancestor sine the date of entry thereon as above stated, except during the following period, when the land was not occuiped for the reason stated,
                  <input class='form-control' type="text" name="tb1_colunm52" value=""></div></p>
                  
                  <p>&nbsp;</p>
                  <div align="justify"><p>
                  10. The land applied for is now occuiped and cultivated by me to the best of my knowledge, information and belief, it is otherwised unreserved and unappropriated and non-minieral, agricultural public land, contains no valuable deposists of guano, coal or salts, and is more valuable for agriculture than forestry or otherwise or other purposes.</p>
<p>&nbsp;</p>
<p>11. I agree that strip forty meters wide strating from the bank on each side of any river or steem that may be found on the land shall be demarated and preserved as permanent timberland to be planted exclusively to trees of know economic vlaue, and that shall not make any clearing thereon or utilize the same for ordinay farming purposes even after patent shall have been issued to me. </p>
            </div>
           <p>&nbsp;</p>
           <div align="justify"><p>
            12. The following named witnesses will testify that the allegation in this application is true:
                  <!--<input class='form-control' type="text" name="tb1_colunm53" value="">
         NAME
                  <input class='form-control' type="text" name="tb1_colunm54" value="">-->
          POST OFFICE ADDRESS
                  <input class='form-control' type="text" name="tb1_colunm55" value=""></div></p>
                  <p>&nbsp;</p>
                  <div align="justify"><p>
                  13. I understand that any applicant who willfully and knowing submit false statement or executes false affidivits in connection with his application shall be deemed guilty or prejury and punished accordingly, and that any person who, not being qualified to apply for public lands, files an application or induces or permits another to file it in his behalf shall be punished by a fine of not more than five thousand pesos and by imprisonment for not more than five years, or both, and in addition thereto, his application shall rejected or cancelled and all amount paid on account thereof, forfeited to the Government, and he shall not be entitiled to apply for any public land in the Philippines.</p></div>
                  <!--<div align="right">
                  <input class='submit' type="text" name="tb1_colunm56" value=""></div>
                  <div align="right"> APPLICANT</div>
                       <p>&nbsp;</p>
                       <center>
                       <p>AFFIDAVIT</p>
                       </center>
                   <div align="left">
           
         <p>(Republic of the Philippines</p></div>
       <div align="left">
             <input class='submit' type="text" name="tb1_colunm57" value="">)</div>
           <p>&nbsp;</p>
            <div align="justify"><p>
            I ,
              <input class='submit' type="text" name="tb1_colunm58" value="">
           , the person making the foregoing applicaton, first being duly sworn, upon my oath, depose and say: That I have read, or someone has read to me, and I thourghly understand the foregoing application that I signed the same and this affidavit in the presence of the officer who administered the oath; and that each and every statement in the application is true and correct.
           <br/>
           SO HELP ME GOD.</div></p> 
            <div align="right">
                  <input class='submit' type="text" name="tb1_colunm59" value=""></div>
            <div align="right"> APPLICANT</div>
            
            
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm65</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm65" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm66</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm66" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm67</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm67" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm68</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm68" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm69</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm69" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm70</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm70" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm71</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm71" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm72</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm72" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm73</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm73" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm74</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm74" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm75</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm75" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm76</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm76" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm77</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm77" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm78</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm78" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm79</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm79" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm80</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm80" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm81</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm81" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm82</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm82" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm83</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm83" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm84</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm84" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm85</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm85" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm86</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm86" value=""></div>
            </div>
            
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm87:</label><div class='col-md-6'><input class='form-control' type="text" name="tb1_colunm87" value=""></div>
            </div>
            
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm88</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm88" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm89</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm89" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm90</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm90" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm91</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm91" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm92</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm92" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm93</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm93" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm94</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm94" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm95</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm95" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm96</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm96" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm97</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm97" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm98</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm98" value=""></div>
           -->
           <!--
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm99</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm99" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm100</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm100" value=""></div>
            </div>
         -->
            <div class='form-group'>
            <div class='col-sm-10'>
            <div class='col-sm-5 col-sm-push-2 no-margin'>
              <button class='btn-lg btn-primary' type='submit'>Continue</button>
            </div>
            <div class='col-sm-5 col-sm-push-2 no-margin'>
              <button class='btn-lg btn-danger' style='float:right' type='reset'>Reset</button>
            </div>
          </div>
          </div>
          
          <input type="hidden" name="MM_insert" value="form1">
        </form>
       
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
</body>
</html>