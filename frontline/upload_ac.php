<?php
//set where you want to store files
//in this example we keep file in folder upload 
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif

$path= "upload/".$HTTP_POST_FILES['ufile']['name'];
$student_number=$_POST['student_number'];
if($ufile !=none)
{
if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
{
echo "Successful!<BR/>"; 

//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file

echo "File Name :".$HTTP_POST_FILES['ufile']['name']."<BR/>"; 
echo "<img src=\"$path\" height=\"150\"><BR/>";
echo "<a href=upload.php?student_number=$student_number&document_name=$path><input type=button value=Continue></a>";
}
else
{
echo "Error";
}
}
?>