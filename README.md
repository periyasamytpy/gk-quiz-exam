<!DOCTYPE html>
<html>
<head>
	<title>Quiz Exam</title>
</head>
<body>
	<h1>Quiz Exam</h1>

	<form action="result.php" method="post">
		<h2>Multiple Choice Questions:</h2>
		<p>1. In what year did World War II end?</p>
		<input type="radio" name="q1" value="a" id="q1a">
		<label for="q1a">a) 1945</label><be>
		<input type="radio" name="q1" value="b" id="q1b">
		<label for="q1b">b) 1942</label><br>
		<input type="radio" name="q1" value="c" id="q1c">
		<label for="q1c">c) 1950</label><be>

		<p>2. Who is the current President of the United States?</p>
		<input type="radio" name="q2" value="a" id="q2a">
		<label for="q2a"> a) Joe Biden</label><be>
		<input type="radio" name="q2" value="b" id="q2b">
		<label for="q2b"> b) Barack Obama</label><br>
		<input type="radio" name="q2" value="c" id="q2c">
		<label for="q2c"> c) Donald Trump</label><br>

		<p>3. What is the capital of France?</p>
		<input type="radio" name="q3" value="a" id="q3a">
		<label for="q3a">a) Paris</label><br>
		<input type="radio" name="q3" value="b" id="q3b">
		<label for="q3b">b) Rome</label><br>
		<input type="radio" name="q3" value="c" id="q3c">
		<label for="q3c">c) London</label><br>

		<h2>Short Answer Questions:</h2>
		<p>4. Who is known as the father of modern physics?</p>
		<input type="text" name="q4">

		<p>5. What is the capital of Japan?</p>
		<input type="text" name="q5">

		<h2>True or False:</h2>
		<p>6. The Great Wall of China is visible from space.</p>
		<input type="radio" name="q6" value="true" id="q6true">
		<label for="q6true">True</label>
		<input type="radio" name="q6" value="false" id="q6false">
		<label for="q6false">False</label><br>

		<p>7. Brazil is the only country in South America that speaks Portuguese.</p>
		<input type="radio" name="q7" value="true" id="q7true">
		<label for="q7true">True</label>
		<input type="radio" name="q7" value="false" id="q7false">
		<label for="q7false">False</label><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<!-- result.php -->
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
