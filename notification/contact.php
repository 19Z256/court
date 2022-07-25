

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
global $mysqli;
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`fldMessage`) VALUES ( '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Notification Records Inserted";
}

?>
