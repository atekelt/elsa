<html>
    <head>
    <title> Elsa Bar and Restaurant </title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta charset ="utf-8">  
    </head>
    <body>
    
    <?php require 'connect.php';
 
$stmt = $conn->prepare("INSERT INTO reserve (first_name, last_name, email, phone, date_of_arrival, time_of_arrival, rooms) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $first_name, $last_name, $email, $phone, $date_of_arrival, $time_of_arrival, $rooms);

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date_of_arrival = $_POST["date_of_arrival"];
$time_of_arrival = $_POST["time_of_arrival"];
$rooms = $_POST["rooms"];

if($stmt->execute()){

    $to_email = "atekeltafework55@gmail.com";
    $subject = "Customer room reservation update E-mail";
    $body = "To Whom It May Concern, A customer ".$first_name." ".$last_name." . Has Reserved a Room.
    \n Details: \n \t\t Number Of Romms -> ".$rooms." \n \t\t E-mail -> ".$email." \n \t\t Phone number -> ".$phone."\n \t\t Date Of Arrival -> ".$date_of_arrival." at ".$time_of_arrival.".";
    $headers = "From: elsarestaurantethiopia@gmail.com";
     
    if (mail($to_email, $subject, $body, $headers)) {
        echo "<script>
alert('Your Request Has Been Sent, Thank You For Choosing To Stay With Us. We will Contact you and Confirm your reservation with in the next 6 Hrs.');
window.location.href='../index.php';
</script>";
    } else {
        echo "<script>
alert('We Are Very Sorry To Tell You Your Request Did Not Go Through, Please Try Again.');
window.location.href='../reservation.html';
</script>";
    }

}

else{
    echo "<script>
alert('We Are Very Sorry To Tell You Your Request Did Not Go Through, Please Try Again.');
window.location.href='../reservation.html';
</script>";
}



$stmt -> close();

?>
    
    </body>
</html>


