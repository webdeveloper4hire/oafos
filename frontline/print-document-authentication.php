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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rstable1 = 1;
$pageNum_rstable1 = 0;
if (isset($_GET['pageNum_rstable1'])) {
  $pageNum_rstable1 = $_GET['pageNum_rstable1'];
}
$startRow_rstable1 = $pageNum_rstable1 * $maxRows_rstable1;

mysql_select_db($database_connection, $connection);
$query_rstable1 = "SELECT * FROM table1 ORDER BY table1_id DESC";
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
<p align="right">
<a href="javascript:window.print();">
<input type="button" value="Print" /></a> 
<a href="index.php">
<input type="button" value="Home" /></a>
</p>

<table width="600" border="1" cellspacing="0" class="jermar" align="center">
  <tr>
    <td colspan="4">
<h3>Document Authentication</h3>

<p>Full Name:  <u><?php echo $row_rstable1['tb1_colunm6']; ?>, <?php echo $row_rstable1['tb1_colunm7']; ?>, <?php echo $row_rstable1['tb1_colunm8']; ?></u><br />
<p>Date : <u><?php echo $row_rstable1['tb1_colunm10']; ?></u><br/>
<p>Address: <u><?php echo $row_rstable1['tb1_colunm11']; ?>, <?php echo $row_rstable1['tb1_colunm12']; ?>, <?php echo $row_rstable1['tb1_colunm13']; ?>, <?php echo $row_rstable1['tb1_colunm14']; ?>, <?php echo $row_rstable1['tb1_colunm15']; ?>, <?php echo $row_rstable1['tb1_colunm16']; ?> </u></p>

<hr />

<p>Please Follow up to the nearest DENR  Office after 5 working days and bring the following requirments.</p>
<ol>
<li>Printed copy of this Request Form</li>
<li>Government Issued I.D</li>
<li>SPA for representative (Private)</li>
</ol>

</td>
</tr>
</table>
<script type="text/javascript">
<!--
window.print();
//-->
</script>
</body>
</html>
<?php
mysql_free_result($rstable1);
?>