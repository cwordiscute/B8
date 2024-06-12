<html>
<head>
<link rel="stylesheet" href="CSS/stil.css">
<meta charset="utf-8">
</head>
<body>
	<title>Knjiga Utisaka</title>

<center>
	<div class="navigacija">
		<a href="index.php">Program</a>
		<a href="uputstvo.html">Uputstvo</a>
		<a href="autor.html">O autoru</a>
	</div>
</center>

<?php

$conn= mysqli_connect('localhost', 'root','','knjiga utisaka');

$nameErr = $emailErr = $commentErr = "";
$name = $email = $comment ="";

if($_SERVER["REQUEST METHOD"]="POST"){
	if (empty($_POST["name"])) {
    $nameErr = "Morate uneti ime";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Morate uneti majl";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "email nije ispravan";
    }
  }
  if (empty($_POST["comment"])) {
    $commentErr = "Morate napisati komentar";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	if(isset($_POST["dugme"])){
	if($nameErr=="" && $emailErr=="" && $commentErr==""){
	$sql="INSERT INTO utisak (Ime, Email, Komentar) VALUES ('{$name}', '{$email}', '{$comment}')";
	mysqli_query($conn, $sql);
	mysqli_close($conn);
	echo "<br>";
	echo "<p id='tekst'>Uspešno uneti podaci</p>";
}
	}
?>


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div>
			<label>Ime</label>
			<input type="text" name="name" ><span>*<?php echo $nameErr;?></span>
		</div>
		<br><br>
		<div>
			<label>Email</label>
			<input type="text" name="email"><span>**<?php echo $emailErr;?></span>
		</div>
		<br><br>
		<div>
			<label>Komentar</label>
			<textarea name="comment"></textarea><span>*<?php echo $commentErr;?></span>
		</div>
		<input type="submit" value="Posalji komentar" name="dugme">

</form>


</body>
</html>