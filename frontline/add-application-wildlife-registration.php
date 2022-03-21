<?php require_once('../Connections/connection.php'); ?>
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
      <img src="img/header3.png" class="img-responsive">
  </div>
   <br>
      <div class='panel-heading'>
        <h5>DENR IV-A: Apply for <?php echo $_GET['service']; ?></h5>
      </div>
      <div class='panel-body'>
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>" class='form-horizontal' role='form'>
          
          <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Database</label>
            <div class='col-md-6'>
                  <input class='form-control' type='text' name="tb1_colunm1" value="<?php echo $_GET['database']; ?>"></div>
          </div>
            
                        
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Service</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm2" value="<?php echo $_GET['service']; ?>"></div>
            </div>
            
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm3</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm3" value="0"></div>
            </div>
            
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm4</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm4" value="<?php echo date("Y-m-d"); ?>"></div>
            </div>
            <div class='form-group' style="display: none;">
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm5</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm5" value=""></div>
                  </div>
            <center>
  <font size="5" >
 Republic of the Philippines</font><br />
 <font size="5" font color="#009900">
Department of Environment and Natural Resources</font><br />
 <font size="5" color="#000099">Regional Office</font><br />
</center>
<p>&nbsp;</p>
        <div align="right">
        <font style="vertical-align:" size="3">Date:
                  <input class='submit' type="date" name="tb1_colunm38" value=""></font></div>
       <div align="center">
<font style="font:Verdana, Geneva, sans-serif" size="4">
APPLICATION FOR: CERTIFICATE OF WILDLIFE REGISTRATION</font></div>
                  <input type="checkbox" name="tb1_colunm39" value="Zoo"> <label>Zoo</label><br>
                   <input type="checkbox" name="tb1_colunm39" value="Private-Collection"> <label>Private Collection</label><br>
                    <input type="checkbox" name="tb1_colunm39" value="Botanical-Garden"> <label>Botanical Garden</label><br>
<p>&nbsp;</p>

Sir/Madam:</font>
<div align="justify"><br />
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">I <input class='submit' type="text" name="tb1_colunm6" value="" placeholder="Lastname" required/>
         
                  <input class='submit' type="text" name="tb1_colunm7" value=""  placeholder="Firstname" required/>
            
                  <input class='submit' type="text" name="tb1_colunm8" value=""  placeholder="Middlename" required/>
          with address at 
                  <input class='submit' type="text" name="tb1_colunm11" value=""  placeholder="Street No."/>
<input class='submit' type="text" name="tb1_colunm12" value=""  placeholder="Street Name"/>
<input class='submit' type="text" name="tb1_colunm13" value=""  placeholder="Sitio"/>
<input class='submit' type="text" name="tb1_colunm14" value="" placeholder="Barrio/Brgy"/>
<input class='submit' type="text" name="tb1_colunm15" value="" placeholder="Municipality"/>         
<input class='submit' type="text" name="tb1_colunm16" value="" placeholder="Provice"/>
<input class='submit' type="text" name="tb1_colunm17" value=""  placeholder="Island"/>
           and tel no.
                  <input class='submit' type="text" name="tb1_colunm18" value="">
        have the honor to apply for the registration of 
                  <input class='submit' type="text" name="tb1_colunm19" value="">
          located at 
                  <input class='submit' type="text" name="tb1_colunm20" value="" placeholder="Street No.">
                  <input class='submit' type="text" name="tb1_colunm21" value="" placeholder="Street Name" />
                  <input class='submit' type="text" name="tb1_colunm22" value="" placeholder="Sitio" />
                  <input class='submit' type="text" name="tb1_colunm23" value="" placeholder="Barrio/Brgy" />
                  <input class='submit' type="text" name="tb1_colunm24" value="" placeholder="Municipality" />
                  <input class='submit' type="text" name="tb1_colunm25" value="" placeholder="Province" />
                  <input class='submit' type="text" name="tb1_colunm26" value="" placeholder="Island" />
          with tel no.
                  <input class='submit' type="text" name="tb1_colunm27" value="">
           and registration of animals/stocks maintained there at which are as follows:
           <p>&nbsp;</p>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">
	<p>I understand that the filing of this application conveys no right to possess any wild animals until Certificate of Wildlife Registration is issued to me by the Regional Executive Director of the DENR Regional Office.</p>
    <!-- <div align="right"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
                  <input class='submit' type="text" name="tb1_colunm28" value=""><br>
                  Signature of Applicant</font></div>
           <div align="left"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
                  <input class='submit' type="text" name="tb1_colunm29" value=""><br>
Postal Address</font></div>-->
<p>&nbsp;</p>
<hr>
       <center>
 <!--<font size="5" >
 Republic of the Philippines</font><br />
 <font size="5" font color="#009900">
Department of Environment and Natural Resources</font><br />
 <font size="5" color="#000099">Regional Office</font><br />
</center>
<p>&nbsp;</p>
	   <font style="font-family:Verdana, Geneva, sans-serif" font size="3"><strong><center>INVENTORY LIST OF WILDLIFE FOR REGISTRATION</center></strong></font>
       <br />

Name of Applicant/Owner:
                  <input class='form-control' type="text" name="tb1_colunm30" value="">
            Address:
                  <input class='form-control' type="text" name="tb1_colunm31" value="">
   Name of Establishment:        
                  <input class='form-control' type="text" name="tb1_colunm32" value="">
          Address:
                  <input class='form-control' type="text" name="tb1_colunm33" value="">-->
           Purpose: 
                  <input class='form-control' type="text" name="tb1_colunm34" value="">
         <p>&nbsp;</p>
<center>
<table style="width:90%" border="3">
  <tr>
    <td>SPECIES<br />
(Common /Scientific Name)</td>
    <td>QUANTITY</td>		
    <td>MODE OF ACQUISITION*</td>
  </tr>
  <tr>
  </tr>
  <tr>
  <td height="80"><textarea name="tb1_colunm35"></textarea></td>
    <td height="80"><textarea name="tb1_colunm36"></textarea></td>
     <td height="80"><textarea name="tb1_colunm37"></textarea></td>
 </tr> 
  </table></center>
                <p>&nbsp;</p>
                *Indicate if acquired through donation, purchase, captive-bred or collected from the wild (specify place of collection)
                <!--
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm38</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm38" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm39</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm39" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm40</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm40" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm41</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm41" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm42</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm42" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm43</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm43" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm44</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm44" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm45</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm45" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm46</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm46" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm47</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm47" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm48</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm48" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm49</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm49" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm50</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm50" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm51</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm51" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm52</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm52" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm53</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm53" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm54</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm54" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm55</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm55" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm56</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm56" value=""></div>
            </div>
            <div class='form-group'>
            
            
            
            
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm57</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm57" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm58</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm58" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm59</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm59" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm60</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm60" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm61</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm61" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm62</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm62" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm63</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm63" value=""></div>
            </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Tb1_colunm64</label>
            <div class='col-md-6'>
                  <input class='form-control' type="text" name="tb1_colunm64" value=""></div>
            </div>
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
            </div>
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
           <!-- old code  <p>&nbsp;</p>
            <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Continue</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='reset'>Reset</button>
            </div>
          </div>
          
          <input type="hidden" name="MM_insert" value="form1">
        </form>
       
      </div>
    </div>
  </div> 
  
</body>
</html>  -->
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