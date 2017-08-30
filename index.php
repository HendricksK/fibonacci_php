<?php

include_once(DIRNAME(__FILE__) . '../controller/class.validation.php');

if(!empty($_POST)) {

	if(!empty($_POST['fibonacciNumber'])) {
		$controller = new validation();

		$fibonacciCheck = intval($_POST['fibonacciNumber']);

		$fibonacciReturn = $controller->isFibonacci($fibonacciCheck);

		if($fibonacciReturn === true) {
			echo $fibonacciCheck . ' is a fibonacci number';
		} else {
			echo $fibonacciCheck . ' is not fibonacci number';
		}
	} else {
		echo 'Please input a number';
	}

} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Question 1</title>
</head>
<body>
	<form action="/lab/question_1/index.php" method="POST">
		<input type="text" name="fibonacciNumber" required>
		<input type="submit" value="Submit">
	</form>
</body>
</html>