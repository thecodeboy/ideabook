<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "koala", "ideabook");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$idea = mysqli_real_escape_string($link, $_POST['idea']);

// attempt insert query execution
$sql = "INSERT INTO ideas (name, idea) VALUES ('$name', '$idea')";
if(mysqli_query($link, $sql)){
    header("Location: hello.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
