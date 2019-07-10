<?php 
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['op'];
if (!empty($n1) && !empty($n2) && !empty($op)) {
	
	$n1 = floatval($n1);
	$n2 = floatval($n2);

	switch ($op) {
		case '-':
			$total = $n1 - $n2;
			echo $n1." - ".$n2." = ".$total;
			break;

		case '+':
			$total = $n1 + $n2;
			echo $n1." + ".$n2." = ".$total;
			break;

		case '*':
			$total = $n1 * $n2;
			echo $n1." * ".$n2." = ".$total;
			break;

		case '/':
			$total = $n1 / $n2;
			echo $n1." / ".$n2." = ".$total;
			break;
		
		default:
			# code...
			break;
	}


} else {

	header("Location: index.php");
}


?>