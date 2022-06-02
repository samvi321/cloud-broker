<?php
if(isset($_POST["add"])){
	$x=$_POST['num1'];
	$y=$_POST['num2'];
	$answer=$x+$y;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cloud Service</title>
</head>
<body>
    <h1>Addition Cloud Service &#128512 </h1>
    <p>Welcome</p>
    <form method="post">
    	<input type="number" name="num1" value="<?php if(isset($x)){echo $x;}?>">
    	<input type="number" name="num2" value="<?php if(isset($y)){echo $y;}?>">
        <input type="submit" name="add" value="Add">
    </form>
    <h1><?php if(isset($answer)){echo "The answer is $answer";}?></h1>
</body>
</html>
