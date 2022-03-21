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

$maxRows_rsnoti = 10;
$pageNum_rsnoti = 0;
if (isset($_GET['pageNum_rsnoti'])) {
  $pageNum_rsnoti = $_GET['pageNum_rsnoti'];
}
$startRow_rsnoti = $pageNum_rsnoti * $maxRows_rsnoti;

mysql_select_db($database_connection, $connection);
$query_rsnoti = "SELECT * FROM table1 WHERE tb1_colunm1 = 'eservices' AND tb1_colunm3 = '0'";
$query_limit_rsnoti = sprintf("%s LIMIT %d, %d", $query_rsnoti, $startRow_rsnoti, $maxRows_rsnoti);
$rsnoti = mysql_query($query_limit_rsnoti, $connection) or die(mysql_error());
$row_rsnoti = mysql_fetch_assoc($rsnoti);

if (isset($_GET['totalRows_rsnoti'])) {
  $totalRows_rsnoti = $_GET['totalRows_rsnoti'];
} else {
  $all_rsnoti = mysql_query($query_rsnoti);
  $totalRows_rsnoti = mysql_num_rows($all_rsnoti);
}
$totalPages_rsnoti = ceil($totalRows_rsnoti/$maxRows_rsnoti)-1;

mysql_free_result($rsnoti);
?>
<?php
if ($totalRows_rsnoti == 0) {
    echo "";
} else {
    echo $totalRows_rsnoti;
}
?>
