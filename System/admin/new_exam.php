<?php
 if(isset($_POST['newstd'])) {
 $ques = $_POST['question'];
 $sub = $_POST['sub'];
 $op1 = $_POST['option1'];
 $op2 = $_POST['option2'];
 $op3 = $_POST['option3'];
 $op4 = $_POST['option4'];
 $ans = $_POST['answer'];
}else{
	header("location:./");
}

include '../db_config/connection.php';

$sql = "SELECT * FROM exam where question = '$ques'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		$ques = $row['question'];
       header("location:new_exam.php?msg=Email $ques is not available&student=$question");
    }
} else {
  $regdate = date('jS \ F Y h:i:s A');
$examno = 'QUES:'.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';

include '../db_config/connection.php';

$sql = "INSERT INTO exam (question_id, sub, question, option1, option2, option3,option4,answer)
VALUES ('$examno', '$sub', '$question', '$op1', '$op2', '$op3', '$op4', '$ans')";

if ($conn->query($sql) === TRUE) {
    header("location:new_exam.php?message=$ques have been registered with ID $examno");
} else {
	$error = $conn->error;
     header("location:new_exam.php?err=$error");
}

$conn->close();



}
$conn->close();

?>


