<?php 
// To disable warnings in program.
error_reporting(E_ERROR);

$postData = $_POST;
$num1 = $postData['num1'];
$num2 = $postData['num2'];
$ans = '';

try {
	switch ($postData['operation']) {
		case 'add':
			$ans = $num1 + $num2;
			break;
		case 'subtract':
			$ans = $num1 - $num2;
			break;
		case 'divide':
			if($num2 == 0) {
				throw new ErrorException("Division by Zero error.");
			}
			$ans = $num1 / $num2;
			break;
		case 'multiply':
			$ans = $num1 * $num2;
			break;
		
		default:
			$ans = '';
			break;
	}
	echo $postData['operation']. " of Number 1 and Number 2 is ". $ans;
} catch ( \ErrorException $e) {
    echo "got ". $e;
}

?>