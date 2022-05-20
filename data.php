<?php
$server = "localhost";
$username = "root";
$password = "";
$connection = mysqli_connect($server,$username,$password);
//our connecting is working for localhost😎😍 tanvir you'are awesome
$bisoy = $_POST['bisoy'];
$taka = $_POST['taka'];
$input = "INSERT INTO `hisab`.`hisabertable` (`bisoy`, `taka`) VALUES ('$bisoy', '$taka');";
if($connection->query($input)){
    echo "DONE😉";
    
}
?>
