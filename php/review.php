<html>
    <head>
    <title> Elsa Bar and Restaurant </title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta charset ="utf-8">  
    </head>
    <body>
    
    <?php require 'connect.php';
 
$stmt = $conn->prepare("INSERT INTO customer_review (full_name, review) VALUES (?, ?)");
$stmt->bind_param("ss", $full_name, $review);

$full_name = $_POST["name"];
$review = $_POST["review"];
$stmt->execute();
$stmt -> close();

echo "<script>
alert('Thank you so much for taking the time to leave us your honest review.');
window.location.href='../index.html';
</script>";

// header("Location: ../index.html"); 
// exit();

?>
    
    </body>
</html>


