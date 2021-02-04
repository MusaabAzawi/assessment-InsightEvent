<?php
$servername = "localhost";
$username = "user1";
$password = "Test1234"; // local only
$dbname = "form";

function getData(){

    global $host, $username,$password,$dbname;

    

    $db = new mysqli($host,$username,$password,$dbname);
    
    if($db->connect_error){
        die("Connection failed " . $db->connect_error);
    }
    
    echo "<table border='1'";
    echo "<tr><th>id</th><th>Voornaam</th><th>Achternaam</th><th>Voorletters</th><th>Postcode</th><th>Huisnummer</th><th>Telefoon</th><th>Email</th>";

  
    $query = "SELECT id , voornaam, achternaam, voorletters , postcode,huisnummer,telefoonnummer, email FROM contactform";
    $result = $db->query($query);
    $row = 0;
    while($row = $result->fetch_object())
    {
      //  $records[]= $row; mysqli_fetch_assoc
    echo "<tr>";
    echo "<td>" . $row->id . "</td>";
    echo "<td>".$row->voornaam."</td>";
    echo "<td>".$row->achternaam."</td>";
    echo "<td>".$row->voorletters."</td>";
    echo "<td>".$row->postcode."</td>";
    echo "<td>".$row->huisnummer."</td>";
    echo "<td>".$row->telefoonnummer."</td>";
    echo "<td>".$row->email."</td>";
    echo "</tr>";
    
    }
    
    echo "</table>";
} 
  //   return $records;
