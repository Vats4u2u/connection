<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $name =$_POST["name"];
   $nsti = $_POST["nsti"];
   $prob =$_POST["prob"];
   

   //database connection
   $servername ="localhost";
   $username ="root";
   $password="";
   $database ="adit";
   

   //create a connection
   $conn = new mysqli("localhost","root","","adit");
   if (!$conn){
    die ("Sorry we failed to connect" .mysqli_connect_error());

   }
   else {
    echo "Hello Dear Candidate <br>";
    $sql ="INSERT INTO `stud` (`name`, `nsti`, `prob`) VALUES ('$name', '$nsti', '$prob')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Your Request is Send to Your Trainer";

    }
    else{
        echo "Sorry We are not able to send your request.." . mysqli_error($conn);
    }
   }
}