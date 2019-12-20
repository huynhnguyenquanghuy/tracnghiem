<?php
if(isset($_POST['newstd'])) 
{
	
$stdname = $_POST['name'];
$stdem = $_POST['email'];
$stdadd = $_POST['address'];
$gender = $_POST['gender'];

include '../db_config/connection.php';

$sql = "SELECT * FROM user_info";
$result = $conn->query($sql);
$dem=0;
    while($row = $result->fetch_array()) 
	{
		if($stdem == $row['email']){
       header("location:new_student.php?msg=Email $stdem is not available");
		}
		else
			$dem++;
    }
	$dem++;
$regdate = date('jS \ F Y h:i:s A');
if($dem<10)
	{
		$dem="STD:000$dem";
	}
else
if($dem<100 and $dem>10)
	{
		$dem="STD:00$dem";
	}
else
	if($dem<1000 and $dem>100)
	{
		$dem="STD:0$dem";
	}
	else
		$dem="STD:$dem";

$sql = "INSERT INTO user_info (user_id, full_name, gender, email, address, regdate)
VALUES ('$dem', '$stdname', '$gender', '$stdem', '$stdadd', '$regdate')";

if ($conn->query($sql)) {
    header("location:new_student.php?message=$stdname have been registered with ID $dem");
} else {
	$error = $conn->error;
     header("location:new_student.php?err=$error");
}

$conn->close();
}else{
	header("location:./");
}


?>


