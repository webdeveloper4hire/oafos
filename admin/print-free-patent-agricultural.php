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
<title>Print | View</title>
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
<table width="600" border="1" cellspacing="0" cellpadding="10" align="center">
  <tr>
    <td align="left" colspan="4">
    
<table height="50" border="0" cellspacing="1" cellpadding="10">
      <tr>
        <td width="50" align="center"><img src="../admin/img/avatar3.png" width="50" /></td>
        <td width="500">
        Department of Environment and Natural Resources<br />
        MIMAROPA Region</td>
        </tr>
      </table>

<div align="justify"> 
<font style="font-family:Verdana, Geneva, sans-serif" font size="3"><p>1. I HEREBY make application for a free patent to the following described tract of a agricultural public land under the provisions of Chapter VII of Commonwealth Act No. 141, as amended or Republic Act No. 782 OR P.D No. 1073 or Ra 6940, (if the land is a subdivision or cadastral lot, mention the lot and survey number) : 
<u><?php echo $row_rstable1['tb1_colunm18']; ?></u></p>

<font style="font-family:Verdana, Geneva, sans-serif" font size="3">situated in a Sitio of </font><u><?php echo $row_rstable1['tb1_colunm13']; ?></u> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">Barrio of </font><u><?php echo $row_rstable1['tb1_colunm14']; ?></u> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">Municipality of  </font> <u><?php echo $row_rstable1['tb1_colunm15']; ?></u> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> Province of </font><u><?php echo $row_rstable1['tb1_colunm16']; ?></u>, <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> Island of</font> <u> <?php echo $row_rstable1['tb1_colunm17']; ?></u><font style="font-family:Verdana, Geneva, sans-serif" font size="3"> Philippines, and containing in area of </font><u><?php echo $row_rstable1['tb1_colunm60']; ?></u> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> hectares, </font><u><?php echo $row_rstable1['tb1_colunm61']; ?></u><font style="font-family:Verdana, Geneva, sans-serif" font size="3"> areas, </font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">and <u><?php echo $row_rstable1['tb1_colunm62']; ?></u> hectares, </font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">a sketch of which is atteached.</font></u>
<br /></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">2. My name is </font> <u><?php echo $row_rstable1['tb1_colunm6']; ?>, <?php echo $row_rstable1['tb1_colunm7']; ?> <?php echo $row_rstable1['tb1_colunm8']; ?> <?php echo $row_rstable1['tb1_colunm9']; ?></u><font style="font-family:Verdana, Geneva, sans-serif" font size="3"> my post-office address is ; </font> <u><?php echo $row_rstable1['tb1_colunm63']; ?></u><font style="font-family:Verdana, Geneva, sans-serif" font size="3"> my age is <u><?php echo $row_rstable1['tb1_colunm64']; ?> </u> years; </font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> my birthplace is <u><?php echo $row_rstable1['tb1_colunm19']; ?>;</u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> I am naturally born citizen of <u><?php echo $row_rstable1['tb1_colunm20']; ?>;</u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> my civil status is (if married, state name, birthplace, citizenship, and residence-address of spouse);<u><?php echo $row_rstable1['tb1_colunm21']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">The name of my father is <u><?php echo $row_rstable1['tb1_colunm22']; ?></u></font></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">a citizen of <u><?php echo $row_rstable1['tb1_colunm23']; ?>.</u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">The following are my near relatives (state their name and relation to the applicant such as parents, children brother, etc.):<u><?php echo $row_rstable1['tb1_colunm24']; ?></u></font>
<br  ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">3. I am not the owner of more than 12 hectares of land</font>
<br ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">4. I am not a CARP beneficiary. </font>
<br >
</br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">5. The land described and applied for not claimed or occupied by another person but is public land land which was first occupied and cultivated by <u> <?php echo $row_rstable1['tb1_colunm25']; ?></u> on <u> <?php echo $row_rstable1['tb1_colunm26']; ?> &amp; </u><u><?php echo $row_rstable1['tb1_colunm27']; ?>.</u> I entered upon and began cultivation of the same on the <u><?php echo $row_rstable1['tb1_colunm28']; ?></u> day of <u> <?php echo $row_rstable1['tb1_colunm29']; ?>-<?php echo $row_rstable1['tb1_colunm30']; ?>,</u>and since that date I have continously cultivated the land; and have made thereon the following improvements:<u><?php echo $row_rstable1['tb1_colunm31']; ?></u></font>
<br ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">6. The land applied for was entered upon, cultivated and occuiped on or about the <u><?php echo $row_rstable1['tb1_colunm32']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">day of <u> <?php echo $row_rstable1['tb1_colunm33']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"><u><?php echo $row_rstable1['tb1_colunm34']; ?>.</u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">by <u><?php echo $row_rstable1['tb1_colunm35']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> who was my <u><?php echo $row_rstable1['tb1_colunm36']; ?>.</u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">My said ancentor died on the <u><?php echo $row_rstable1['tb1_colunm37']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> day of <u><?php echo $row_rstable1['tb1_colunm38']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"><u><?php echo $row_rstable1['tb1_colunm39']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> at<u><?php echo $row_rstable1['tb1_colunm40']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> province of <u><?php echo $row_rstable1['tb1_colunm41']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> on the <u><?php echo $row_rstable1['tb1_colunm42']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> day of <u><?php echo $row_rstable1['tb1_colunm43']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">  <u><?php echo $row_rstable1['tb1_colunm44']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> Evidence of relationship, death, burail, and heirship is hereto attached and consist  of <u><?php echo $row_rstable1['tb1_colunm45']; ?>.</u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> The following are the names and addresses of the heirs of my ancestor <u>  <?php echo $row_rstable1['tb1_colunm46']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> NAME <u> <?php echo $row_rstable1['tb1_colunm47']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> POST OFFICE ADDRESS <u><?php echo $row_rstable1['tb1_colunm48']; ?></u></font>
<br ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">7. I am <u> <?php echo $row_rstable1['tb1_colunm49']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> the only heir representative of the heirs of <u><?php echo $row_rstable1['tb1_colunm50']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3">  entitiled to succeed hom according to the laws of the Philippines. </font>
<br  ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">8. Since the death of my said ancetor, I have cultivated the said land and existing improvements thereon consists of the following: <u><?php echo $row_rstable1['tb1_colunm51']; ?></u></font>
<br  ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">9. The land has been continuosly occuiped and cultivated by me or my said ancestor sine the date of entry thereon as above stated, except during the following period, when the land was not occuiped for the reason stated, <u><?php echo $row_rstable1['tb1_colunm52']; ?></u></font>
<br ></br >
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">10. The land applied for is now occuiped and cultivated by me to the best of my knowledge, information and belief, it is otherwised unreserved and unappropriated and non-minieral, agricultural public land, contains no valuable deposists of guano, coal or salts, and is more valuable for agriculture than forestry or otherwise or other purposes.</font>
<br ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3"> 11. I agree that strip forty meters wide strating from the bank on each side of any river or steem that may be found on the land shall be demarated and preserved as permanent timberland to be planted exclusively to trees of know economic vlaue, and that shall not make any clearing thereon or utilize the same for ordinay farming purposes even after patent shall have been issued to me.</font>
<br  ></br>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3"> 12. The following named witnesses will testify that the allegation in this application is true: <u><?php echo $row_rstable1['tb1_colunm53']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> NAME <u> <?php echo $row_rstable1['tb1_colunm54']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> POST OFFOCE ADDRESS <u> <?php echo $row_rstable1['tb1_colunm55']; ?></u></font><font style="font-family:Verdana, Geneva, sans-serif" font size="3"><br />
<br />
13. I understand that any applicant who willfully and knowing submit false statement or executes false affidivits in connection with his application shall be deemed guilty or prejury and punished accordingly, and that any person who, not being qualified to apply for public lands, files an application or induces or permits another to file it in his behalf shall be punished by a fine of not more than five thousand pesos and by imprisonment for not more than five years, or both, and in addition thereto, his application shall rejected or cancelled and all amount paid on account thereof, forfeited to the Government, and he shall not be entitiled to apply for any public land in the Philippines.</font>
<p>&nbsp;</p>
<div align="right"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">_______________________</u></font><br />
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">APPLICANT</font></div>
<p>&nbsp;</p>
<div align="center"><font size="3">AFFIDAVIT</font></div>
<br />
<div align="left"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">(Republic of the Philippines <u></br
><?php echo $row_rstable1['tb1_colunm57']; ?>)</u></font></div>
<p>&nbsp;</p>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">I , <u><?php echo $row_rstable1['tb1_colunm6']; ?>, <?php echo $row_rstable1['tb1_colunm7']; ?>, <?php echo $row_rstable1['tb1_colunm8']; ?></u></font> <font style="font-family:Verdana, Geneva, sans-serif" font size="3"> , the person making the foregoing applicaton, first being duly sworn, upon my oath, depose and say: That I have read, or someone has read to me, and I thourghly understand the foregoing application that I signed the same and this affidavit in the presence of the officer who administered the oath; and that each and every statement in the application is true and correct.</br></font>

<div align="left">SO HELP ME GOD. </div>
<div align="right"><font style="font-family:Verdana, Geneva, sans-serif" font size="3">____________________</font><br />
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">APPLICANT</font></div>
</div>
<hr />
<p>&nbsp;</p>
<div align="justify">
<font size="4" font style="font-family:Verdana, Geneva, sans-serif">
<strong>3.3 Checklist of essential papers/requisites in free patent</strong></font>
<p> <font size="3" font style="font-family:Verdana, Geneva, sans-serif">1. Application- All FPA's after Dec. 31, 1987 and prior to April 16, 1990 must be refiled in the CENRO or in the stablished filing center accesible in the municipality or barangay where the land is located
<p>&nbsp;</p>
2. Notice of application for free patent;
 <p>&nbsp;</p>
 3. Whenever necessary, a joint affidavit of two disinterested witnesses and approved survey plan and technical discription of the land;
 <p>&nbsp;</p>
 4. Documentary proofs of owership such as deed of sale, donation, etc;
 <p>&nbsp;</p>
 5.Final report of investigation and land Data Records Sheet as prescribed by LOC 131;
 <p>&nbsp;</p>
 6. For free Patent Application filed under RA 6940, proof of payment of real estate taxes; 
 <p>&nbsp;</p>
 7. Order Approval of Application and Issuance of Patent;
 <p>&nbsp;</p>
 8. Judical Form No. 54 and 54-D;
 <p>&nbsp;</p>
 9. Transmittal letters of Provincial Environment and Natural Resources Officer/ Regional Executive Director/Department of Natural Resources.  </p></font>
 <p>&nbsp;</p>
 <font style="font:Verdana, Geneva, sans-serif" font size="3">
 <strong>3.4 Processing of free patent application</strong></font>

<p>&nbsp;</p>
 <div align="justify">
<font size="3" font style="font-family:Verdana, Geneva, sans-serif">
1. All application for free patent shall be processed to ascertain whether -
<ul style="list-style-type:square">
<li>the land is classified as alienable or disposable</li>
   <li>the applicant is qualified and has signed his/her application with documentary stamp affixed on it.</li>
   <li>the land applied for a survey and does not exceed the maximum area limitation.</li>
   <li>the applicant has paid the required application and other adminstrative fees.</li>
   <li>the land appilied for is covered by any other public land application.</li>
   <li>the applicant is the holder of any other public land application.</li>
    </ul>
</font></div>
<p>&nbsp;</p>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">
2. Notice of Application for free Patent
<ul style="list-style-type:square">
<li>Notice should be posted in the provoncial capitol, municipal building, and barangay hall where the land applied for is located.</li>
<li>If land application is filed under Commonwealth Act No. 141, as amended, notice should be posted for 30 consecutive days.</li>
<li>If application is filed under RA 782, 3871, PD 1073, and RA 6940, notice should be posted for two consecutive weeks and accompanied by a joint affidavit of two disinterested person proving applicant's occupancy of the land, either by himself or thourgh his prodecessor-in-interest.</li>
<li>The filing of adverse claims should be done on or before the last day of posting of notice.</li>
<li>Notice should be ratified on or after the last day of positiong by an authorized offcial. Oath fee should be paid if notice is not accoplishment in the prescribe form.</li>
</ul>
</font>
<p>&nbsp;</p>
<font style="font-family:Verdana, Geneva, sans-serif" font size="3">
3. Examine the Final investigation report ascertain -
<ul style="list-style-type:square">
<li>whether the land is alienable and disposable.</li>
<li>when the land applied for was first occuiped and cultivate either by the applicant or thourgh his predecessor-in-interest.</li>
<li>whether the land is claimed by another person.</li>
<li>the acctaul occupant of the land and the kind of improvements made in the land and the party reponsible for the improvement therein.</li>
<li>whether the land is fully cultivated or not. When an apllicant his occupied and cultivated a bigger fraction of the land and has cleared the ramaining portion with only a small portion untouched, he is entitled to a patent for the whole area.</li>
<li>the correcr lot and area.</li>
</ul>
</font>  

</td>
</tr>
</table>

<!--
<table border="1">
   <tr>
      <td><?php echo $row_rstable1['table1_id']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm1']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm2']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm3']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm4']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm5']; ?></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><?php echo $row_rstable1['tb1_colunm65']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm66']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm67']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm68']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm69']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm70']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm71']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm72']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm73']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm74']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm75']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm76']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm77']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm78']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm79']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm80']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm81']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm82']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm83']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm84']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm85']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm86']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm87']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm88']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm89']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm90']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm91']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm92']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm93']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm94']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm95']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm96']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm97']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm98']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm99']; ?></td>
      <td><?php echo $row_rstable1['tb1_colunm100']; ?></td>
    </tr>
    
</table>
-->

</body>
</html>
<?php
mysql_free_result($rstable1);
?>