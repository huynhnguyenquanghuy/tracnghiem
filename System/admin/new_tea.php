<?php
if(isset($_POST['new_tea'])) {
$teaname = $_POST['name'];
$teaem = $_POST['email'];
$teaadd = $_POST['address'];
$teasub = $_POST['Sub'];
$gender = $_POST['gender'];
$dem=0;

include '../db_config/connection.php';

$sql = "SELECT * FROM user_info";
$result = $conn->query($sql);

    while ($row = $result->fetch_array()) 
		{	if($row['email'] == $teaem)
			{
				header("location:new_examfontend.php?err= email da ton tai");
			}
			else
				$dem++;
		}
	$dem++;
$regdate = date('jS \ F Y h:i:s A');
if($dem<10)
	{
		$dem="TEA:000$dem";
	}
else
	if($dem<100 and $dem>10)
	{
		$dem="TEA:00$dem";
	}
	else
	if($dem<1000 and $dem>100)
	{
		$dem="TEA:0$dem";
	}
	else
		$dem="TEA:$dem";
	
$sql = "INSERT INTO user_info (user_id, full_name, sub, gender, email, address, role, regdate)
VALUES ('$dem', '$teaname', N'$teasub', '$gender','$teaem', '$teaadd','Teacher', '$regdate')";


if ($conn->query($sql)) {
    header("location:new_teacher.php?message=$teaname have been registered with ID $dem");
} else {
	$error = $conn->error;
     header("location:new_teacher.php?err=$error");
}

$conn->close();



}else{
	header("location:./");
}

?>