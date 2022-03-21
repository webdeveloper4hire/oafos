<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload Form</title>
</head>

<body>
<h3>Select File to Upload (1/3)</h3>

<form action="upload_ac.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table>
  <tr>
    <td nowrap="nowrap" align="right">Student Number:</td>
    <td><input name="student_number" type="text" value="<?php echo $_GET['student_number']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td nowrap="nowrap" align="right">File:</td>
    <td><input name="ufile" type="file" id="ufile" size="30" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Upload" /></td>
  </tr>
</table>
</form>
</body>
</html>
