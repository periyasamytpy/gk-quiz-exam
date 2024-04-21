<?php 
if(isset($_POST['submit'])){
	$result = 0;

	//check answers for multiple choice questions
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];

	if($q1 == "a"){
		$result++;
	}

	if($q2 == "a"){
		$result++;
	}

	if($q3 == "a"){
		$result++;
	}

	//check answers for short answer questions
	$q4 = strtolower($_POST['q4']); //convert input to lowercase
	$q5 = strtolower($_POST['q5']);

	if($q4 == "albert einstein"){
		$result++;
	}

	if($q5 == "tokyo"){
		$result++;
	}

	//check answers for true or false questions
	$q6 = $_POST['q6'];
	$q7 = $_POST['q7'];

	if($q6 == "false"){
		$result++;
	}

	if($q7 == "true"){
		$result++;
	}

	//display results
	echo "<h2>Result:</h2>";
	echo "You scored ".$result." out of 7 total questions.";
}
?>
<a href="https://www.tnpscgroup4.in/gk-questions.html">gk questions</a>
<a href="https://www.tnpscgroup4.in">tnpsc group 4</a>
