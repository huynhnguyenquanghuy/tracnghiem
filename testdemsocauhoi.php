	<?php
	include 'System\db_config\connection.php';
	$dem = 0;

	$sqlString = "SELECT * from exam";
	if ($result = $conn->query($sqlString)) 
	{
		while ($row = $result->fetch_array()) 
		{
			$dem++;
		}
	}
	$dem++;
	if($dem<10)
	{
		$dem="00$dem";
	}
	
	if($dem<100 and $dem>10)
	{
		$dem="0$dem";
	}
	
	$sqlString = "INSERT INTO exam(question_id, sub, question, option1, option2, option3, option4, answer) VALUES ('QUES$dem','sub','q','op1','op2','op3','op4','ans')";
	if ($conn->query($sqlString)) {
        echo '<div class="alert alert-success" role="alert" style="text-align:center> add successfully !</div>';
    }
	else echo '<div class="alert alert-danger" role="alert" style="text-align:center> add fail !</div>';

	?>