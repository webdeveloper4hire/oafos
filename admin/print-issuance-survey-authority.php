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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "update")) {
  $updateSQL = sprintf("UPDATE table1 SET tb1_colunm3=%s WHERE table1_id=%s",
                       GetSQLValueString($_POST['tb1_colunm3'], "text"),
                       GetSQLValueString($_POST['table1_id'], "int"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($updateSQL, $connection) or die(mysql_error());

  $updateGoTo = "list_request.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rstable1 = 1;
$pageNum_rstable1 = 0;
if (isset($_GET['pageNum_rstable1'])) {
  $pageNum_rstable1 = $_GET['pageNum_rstable1'];
}
$startRow_rstable1 = $pageNum_rstable1 * $maxRows_rstable1;

$colname_rstable1 = "-1";
if (isset($_GET['table1_id'])) {
  $colname_rstable1 = $_GET['table1_id'];
}
mysql_select_db($database_connection, $connection);
$query_rstable1 = sprintf("SELECT * FROM table1 WHERE table1_id = %s", GetSQLValueString($colname_rstable1, "int"));
$query_limit_rstable1 = sprintf("%s LIMIT %d, %d", $query_rstable1, $startRow_rstable1, $maxRows_rstable1);
$rstable1 = mysql_query($query_limit_rstable1, $connection) or die(mysql_error());
$row_rstable1 = mysql_fetch_assoc($rstable1);

if (isset($_GET['totalRows_rstable1'])) {
  $totalRows_rstable1 = $_GET['totalRows_rstable1'];
} else {
  $all_rstable1 = mysql_query($query_rstable1);
  $totalRows_rstable1 = mysql_num_rows($all_rstable1);
}
$totalPages_rstable1 = ceil($totalRows_rstable1/$maxRows_rstable1)-1;

$queryString_rstable1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rstable1") == false && 
        stristr($param, "totalRows_rstable1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rstable1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rstable1 = sprintf("&totalRows_rstable1=%d%s", $totalRows_rstable1, $queryString_rstable1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
</head>

<body>

<form method="POST" name="update" action="<?php echo $editFormAction; ?>">
<p align="right">
<input type="hidden" name="tb1_colunm3" value="1">
<input type="submit" value="Mark as read" />
<input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="table1_id" value="<?php echo $row_rstable1['table1_id']; ?>" />
<A HREF="javascript:window.print();">
<input type="button" value="Print" /></A></p>
<input type="hidden" name="MM_update" value="update" />
</form>
<center>
  <table width="600" border="1" cellspacing="0" class="jermar">
  <tr>
    <td align="left" colspan="4">
    <center>
    <font style="font:Verdana, Geneva, sans-serif" font size="3">
    <div align="center">
    <p><i>Republic of the Philippines</i>
<br /><b><font color="#006600">Department of Environment and Natural Resources</font></b>
<br /><b><font color="#003399">Community Environment and Natural Resources Office</font></b>
<br /><b>MIMAROPA Region</b>
</p></div></font>
<p>&nbsp;</p>
<div align="right">
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">
<p>Survey Authority No. <u><?php echo $row_rstable1['tb1_colunm18']; ?></u>
<p>Date <u><?php echo $row_rstable1['tb1_colunm10']; ?></u></p></font></div>
<p>&nbsp;</p>
<div align="left">
  <font style="font-family:Verdana, Geneva, sans-serif" font size="3">
  <p>SUBJECT:
<br/>Request for Survey Authority for a tract 
<br />of land public land located at <br />
 <u><?php echo $row_rstable1['tb1_colunm11']; ?>, <?php echo $row_rstable1['tb1_colunm12']; ?>, <?php echo $row_rstable1['tb1_colunm13']; ?>, <?php echo $row_rstable1['tb1_colunm14']; ?>, <?php echo $row_rstable1['tb1_colunm15']; ?>, <?php echo $row_rstable1['tb1_colunm16']; ?> </u></p>
</font></div>
<p>&nbsp;</p>
  <div align="left">
  <font style="font-family:Verdana, Geneva, sans-serif" font size="3">
 Engr:
  <u><?php echo $row_rstable1['tb1_colunm19']; ?></u>
  <p>&nbsp;</p>
 Sir</font></div>
  <p>
  <div align="justify"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
  Pursuant To DENR Adm. Order No. 38 and upon evaluation of the request of <u><?php echo $row_rstable1['tb1_colunm6']; ?>, <?php echo $row_rstable1['tb1_colunm7']; ?>, <?php echo $row_rstable1['tb1_colunm8']; ?></u>, claimant of the above described tract of public land, to avail of your services, authority is hereby granted to you to execute the survey thereof subject to the relevant provisions of the Manual for Land Surveys in the Philippines as amended and to the conditions stated at the back hereof.</font></div></p>
<p><div align="left"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
 Violation of any of the aforesaid condition shall invalidate this authority, and damages that may result there for shall be your sole liability and professional responsibility.</font></div>
</p>
 <div align="right"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
<p><br /> Very truly yours,
							
<br />For and by authority of the
<br />Secretary of DENR:</p></font></div>
<p>&nbsp;</p>
<div align="left"><font style="font-family:Verdana, Geneva, sans-serif">____________________<br />
Signature/Name of G.E. </font></div>

<div align="right"><font style="font-family:Verdana, Geneva, sans-serif">______________________<br />
CENRO</font></div>
  
  
<hr />

<div align="left"><font style="font-family:Verdana, Geneva, sans-serif">
Above stated request confirmed:	<br />______________________<br />(Signature of claimant)</font></div>
    
   <div align="right"><font style="font-family:Verdana, Geneva, sans-serif"> 
 <br />  Issuance of Survey Authority
		<br />Recommended:<br />_______________  <br />   (Signature/Name of Inspector)</font></div>
     <br />
<br />
        <div align="left"><font style="font-family:Verdana, Geneva, sans-serif">(Address)___________________<br/>
___________________________<br/>
___________________________<br/>		</font></div>
 <br />
        <div align="right"><font style="font-family:Verdana, Geneva, sans-serif"> <u><?php echo $row_rstable1['tb1_colunm17']; ?></u><br /> (Position or Designation)</font></div>
 
 <div align="left"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
 Ref. _____________________ <br/>
 Cad. Cost of ______________ <br/>
 Under O.R. No ____________ <br/>
 Date ______________________
</font></div>

  <div align="right"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
 Ref. Inspector/Investigator Report
<br /> Date ____________</font></div>
<p>&nbsp;</p>
 <div align="center">
    NOTE: For this Survey Authority to be valid, the Four (4) required signature to be present)</div>
    <hr/ >
    <p>&nbsp;</p>
     <div align="center"><font style="font-family:Verdana, Geneva, sans-serif" font size="4">
       <ul><strong>C O N D I T I O N S</strong></ul></font></div>
     <div align="justify"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">
     The Survey Authority granted at the face hereof shall be valid only under the following conditions:

<br />1.	That the land sought to be surveyed in an underreed portion of an alienable and disposable area established by the Bureau of Forest Development or the DENR;

<br />2.	That the land has not been reserved for public or quasi-public purposes;

<br />3.	That the land does not embrace any holding of a bonafide occupant public applicant or claim of a private person and if it does, the area of such holding or claim shall be excluded from the survey or if the survey  is conducted for establishment of claims and conflicts, the same shall be so indicated on the survey plan;  

<br />4.	That the land is not within a cadastral or public land subdivision survey project still in progress;

<br />5.	That the land is not the subject of a pending ordinary land registration case or litigation in the court.
<br />
The above conditions shall be deemed to have been automatically modified by administrative issuance that may be issued by the DENR Secretary, the Director LMB, the Regional Executive Director of his Technical Director of Lands Management.</font></div>
</center>

<hr />

<p>Please Follow up to the nearest DENR  Office after 5 working days and bring the following requirments.</p>
<ol>
<li>Printed copy of this Request Form</li>
<li>Any Document showing identity  of land (e.g lot number, survey card, tax declaration, Deed of Sale,)</li>
</ol>
</td>
</tr>
</table>
</body>
</html>
<?php
mysql_free_result($rstable1);
?>