<?php
$conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
$number = $_GET[number];
$query = "delete from pop where number = '$number'";
$result = $conn->query($query);
if($result) {
    ?>
    <script>
        alert("삭제되었습니다.");
        location.replace("./popadd.html");
    </script>
<?php    }
else {
    echo "fail";
}
?>
