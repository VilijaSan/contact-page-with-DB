<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	$servername = "xxx";
	$username = "xxx";
	$password = "xxx";
	$dbname = "xxx";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	mysqli_set_charset($conn,"utf8");


	if($_POST) {
		$vardas = $_POST['vardas'];
		$email = $_POST['email'];
		$telefonas = $_POST['telefonas'];
		$data = $_POST['data'];
		$laikas = $_POST['laikas'];
		$sveciai = $_POST['sveciai'];
		$zinute = $_POST['zinute'];


		$query = "SELECT vardas FROM rezervacijos 
            WHERE vardas='$vardas' AND email='$email' AND telefonas='$telefonas' AND data='$data' AND laikas='$laikas'
             AND sveciai='$sveciai'";

        $selectResult = mysqli_query($conn, $query);

		if(mysqli_num_rows($selectResult) > 0) {
			echo 'duplicate';
		} else {
			$sql = "INSERT INTO rezervacijos (vardas, email, telefonas, data, laikas, sveciai, zinute)
	        VALUES ('$vardas', '$email', '$telefonas', '$data', '$laikas', '$sveciai', '$zinute')";

			$result = mysqli_query($conn, $sql);

			if($result) {
				echo 'success';
			} else {
				echo 'error';
			}
		}
	}

	mysqli_close($conn);

?>
