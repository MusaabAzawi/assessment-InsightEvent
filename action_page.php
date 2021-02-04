<?php
include_once 'database.php';

// code gebruikt van php course in het verleden. code.tutsplus.com
$db = new mysqli($host,$username,$password,$dbname);
    
    if($db->connect_error){
        die("Connection failed " . $db->connect_error);
    }

if(isset($_POST['save']))
{	 
	 $firstName = $_POST['fname'];
	 $lastName = $_POST['lname'];
	 $vLetters= $_POST['vlet'];
     $postCode = $_POST['pcode'];
	 $huisNr = $_POST['hnr'];
	 $telNr = $_POST['tel'];
     $email = $_POST['email'];
     $password = $_POST['pw'];
	 $sql = "INSERT INTO contactform (voornaam,achternaam,voorletters,postcode,huisnummer,email,wachtwoord)
	 VALUES ('$firstName','$lastName','$vLetters', '$postCode', '$huisNr' ,'$email','$password')";
	 if (mysqli_query($db, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>
