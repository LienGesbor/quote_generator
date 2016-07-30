<!doctype html>
<html lang="en">

<?php
require ('includes/connect.php');
require ('includes/functions.php');
?>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
<div class="container-fluid text-center">
	<h1>Random Quote Generator</h1>
	<p>Some of my favourite all around quotes!</p>
	<br/>
	<button class="btn btn-default" onclick="newQuote()" type="submit">New Quote
	</button>
	<div class="quote_wrap text-center">
		<div class="quote">
			<?php
			$_SESSION['idArray'] = [];
			while($row = $getQuote->fetch_assoc()){
				$stringID = $row['id'];
				$stringQuote = $row['quote'];
				$stringAuthor = $row['author'];
				echo "<div class='quote' id='$stringID'>".$stringQuote."<div>";
		  		}
		      ?>
      	</div>
      </br>
      <div class="author text-center"><?php echo $stringAuthor?></div>
</div>

<script src="https: /ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

<script type="text/javascript">
function newQuote()
{
    location.reload();
}
function preventDoubles()
{

}
</script>

</body>
</html>