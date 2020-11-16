<?php
$q1a = $_POST["question1"];
$q2a = $_POST["question2"];
$q3a = $_POST["question3"];
$q4a = $_POST["question4"];
$q5a = $_POST["question5"];
$correct = 0;
if($q1a == "answer1"){
	$correct++;
}
if($q2a == "answer2"){
	$correct++;
}
if($q3a == "answer4"){
	$correct++;
}
if($q4a == "answer3"){
	$correct++;
}
if($q5a == "answer5"){
	$correct++;
}
$score = $correct / 5 * 100;
echo "<p>Question 1:</p><br>";
echo "<p>	You answered: $q1a</p><br>";
echo "<p>	Correct answer: answer1</p><br>";
echo "<p>Question 2:</p><br>";
echo "<p>	You answered: $q2a</p><br>";
echo "<p>	Correct answer: answer2</p><br>";
echo "<p>Question 3:</p><br>";
echo "<p>	You answered: $q3a</p><br>";
echo "<p>	Correct answer: answer4</p><br>";
echo "<p>Question 4:</p><br>";
echo "<p>	You answered: $q4a</p><br>";
echo "<p>	Correct answer: answer3</p><br>";
echo "<p>Question 5:</p><br>";
echo "<p>	You answered: $q5a</p><br>";
echo "<p>	Correct answer: answer5</p><br>";
echo "<p>You got $correct correct.</p><br>";
echo "<p>That is $score%</p>";
?>
