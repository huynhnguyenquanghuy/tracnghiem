<?php
 if(isset($_POST['new_exam'])) {
 $ques = $_POST['ques'];
 $sub = $_POST['sub'];
 $op1 = $_POST['op1'];
 $op2 = $_POST['op2'];
 $op3 = $_POST['op3'];
 $op4 = $_POST['op4'];
 $ans = $_POST['ans'];


include '../db_config/connection.php';

$sqlString = "SELECT * FROM exam";
$result = $conn->query($sqlString);
	while ($row = $result->fetch_array()) 
		{	if($row['question'] == $ques)
			{
				header("location:new_examfontend.php?err= cau hoi da ton tai");
			}
			else
				$dem++;
		}
	$dem++;
	if($dem<10)
	{
		$dem="QUES00$dem";
	}
	
	if($dem<100 and $dem>10)
	{
		$dem="QUES0$dem";
	}
	else
		$dem="QUES$dem";

$sql = "INSERT INTO exam (question_id, sub, question, option1, option2, option3,option4,answer)
VALUES ('$dem', N'$sub', N'$ques', N'$op1', N'$op2', N'$op3', N'$op4', N'$ans')";

if ($conn->query($sql)) {
    header("location:new_examfontend.php?message=$ques have been registered with ID $dem");
} 
else {
	$error = $conn->error;
     header("location:new_examfontend.php?err=$error");
}
$conn->close();
}else{
	header("location:./");
}
?>


