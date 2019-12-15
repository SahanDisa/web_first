<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sewana_assignment");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$propno = mysqli_real_escape_string($link, $_REQUEST['propno']);
$protype = mysqli_real_escape_string($link, $_REQUEST['protype']);
$propadd = mysqli_real_escape_string($link, $_REQUEST['propadd']);
$pronumroom = mysqli_real_escape_string($link, $_REQUEST['pronumroom']);
$prorent = mysqli_real_escape_string($link, $_REQUEST['prorent']);
$prowner = mysqli_real_escape_string($link, $_REQUEST['prowner']);
$probranch = mysqli_real_escape_string($link, $_REQUEST['probranch']);



// Attempt insert query execution
$sql = "INSERT INTO property  VALUES (''$propno', '$pro_type','$propadd','$pronumroom','$prorent','$prowner','$probranch'')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>