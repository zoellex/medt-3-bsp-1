<!DOCTYPE html>
<html>
<head>

  <meta charset = "utf-8">
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <title>MEDT - Beispiel 1</title>

</head>
<body>

<div style="margin-left: 30px;">

<h1><strong>Beispiel 1</strong></h1>

  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    <div class="form-group">
    <label>Ihre Eingabe:<input class="form-control" name="input" type="text" placeholder="Text"></label>
  	</div>

  	<button type="submit" class="btn btn-default" name="submitBTN">Explode</button>
  	<button type="submit" class="btn btn-default" name="resetBTN">Reset</button>
  </form>

<br><br>
<h4>Ihre Eingabe als Liste:</h4>

<?php
if(isset($_POST['submitBTN']))
  {
  	$bool = true;
	$input =  $_POST['input'];

	$array = explode(" ",$input);

	echo "<div style=\"width: 600px; margin-left: 50px;\">";
	echo "<ul class=\"list-group\">";

	foreach($array as $item)
	{
		if($bool == true)
		{
			echo "<li class=\"list-group-item\" style=\"background-color: lightgray;\">$item</li>";
			$bool = false;
		}
		else
		{
			echo "<li class=\"list-group-item\">$item</li>";
			$bool = true;
		}
	}
	echo "</ul>";
	echo "</div>";
  }
 ?>
 </div>
</body>
</html>