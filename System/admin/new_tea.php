<?php
if(isset($_POST['newtea'])) {
$teaname = $_POST['name'];
$teaem = $_POST['email'];
$teaadd = $_POST['address'];
$teasub = $_POST['sub'];
$gender = $_POST['gender'];
}else{
	header("location:./");
}

include '../db_config/connection.php';

$sql = "SELECT * FROM user_info where email = '$teaem'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		$student = $row['full_name'];
       header("location:new_teacher.php?msg=Email $teaem is not available&student=$teacher");
    }
} else {
  $regdate = date('jS \ F Y h:i:s A');
$teano = 'STD:'.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';

include '../db_config/connection.php';

$sql = "INSERT INTO user_info (user_id, full_name, sub, gender, email, address, role, regdate)
VALUES ('$teano', '$teaname', '$gender', '$teaem','$teasub', '$teaadd','Teacher', '$regdate')";

if ($conn->query($sql) === TRUE) {
    header("location:new_teacher.php?message=$teaname have been registered with ID $teano");
} else {
	$error = $conn->error;
     header("location:new_tea.php?err=$error");
}

$conn->close();



}
$conn->close();

?>


