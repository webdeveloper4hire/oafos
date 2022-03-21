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
<font style="font-family:Verdana, Geneva, sans-serif" font size="4"><strong>APPLICATION FOR CHAINSAW REGISTRATION</strong></font></center>
<br />
<div align="justify">
<p><font style="font-family:Verdana, Geneva, sans-serif" font size="3">Registration No. <?php echo $row_rstable1['tb1_colunm21']; ?> </font></p>
<p><font style="font-family:Verdana, Geneva, sans-serif" font size="3">Type: <?php echo $row_rstable1['tb1_colunm22']; ?></font></p>
<p><font style="font-family:Verdana, Geneva, sans-serif" font size="3">DENR MIMAROPA</p>
<p>Sir:</p>
<p>I/WE <u><?php echo $row_rstable1['tb1_colunm6']; ?>, <?php echo $row_rstable1['tb1_colunm7']; ?>, <?php echo $row_rstable1['tb1_colunm8']; ?></u> with address at <u><?php echo $row_rstable1['tb1_colunm11']; ?>, <?php echo $row_rstable1['tb1_colunm12']; ?>, <?php echo $row_rstable1['tb1_colunm13']; ?>, <?php echo $row_rstable1['tb1_colunm14']; ?>, <?php echo $row_rstable1['tb1_colunm15']; ?>, <?php echo $row_rstable1['tb1_colunm16']; ?>, <?php echo $row_rstable1['tb1_colunm17']; ?></u> and telephone No.<u><?php echo $row_rstable1['tb1_colunm18']; ?></u></p>
hereby applies for: <u><?php echo $row_rstable1['tb1_colunm19']; ?></u></font>
<p><font style="font-family:Verdana, Geneva, sans-serif" font size="3"></p>
<p>I/WE understand that the filing of this application does not convey the authority to the undersigned to purchased, import, assemble, manufacture, sell, re-sell, distribute or use the chainsaw/s subject of application until such rime that a Permit or Certificate of Registration is issued by DENR.</p>
<p>I/We further, undestand that any false statement, unisrepresentation and/or misdeclaration stated herein shall be a ground for denail and/or revocation of registration without predujice to the filing of appropriate legalaction.</p>
<!--<div align="right">
Very truly yours,
<br />
<u><?php echo $row_rstable1['tb1_colunm20']; ?></u>
<br />


Printed Name and Singnature of Owner</div>-->

<hr />
<p>Please Follow up to the nearest DENR CENRO Office after 5 working days and bring the following requirments.</p>
<ol>
<li>Stencil Serial Number of Chainsaw</li>
<li>Printed copy of this Application Form</li>
<li>Detailed Specification of Chainsaw (e.g. brand, model, engine capacity, etc)</li>
<li>Official Receipt (Upon Payment)</li>
</ol>
</font>
</div>
</td>
</tr>
</table>

</body>
</html>
<?php
mysql_free_result($rstable1);
?>