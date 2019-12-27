<?php
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("localhost","root","sql","data2019");
    $data_stream = "'".$_GET['Id']."','".$_GET['Password']."','".$_GET['Name']."','".$_GET['PhoneNum']."','".$_GET['Email']."'";
    $query = "INSERT INTO User(`Id`, `Password`, `Name`, `PhoneNum`, `Email`) values (".$data_stream.")";

    $result = mysqli_query($conn, $query);

    if($result)
        echo "1";
    else
        echo "-1";

    mysqli_close($conn);
?>
