<?php
session_start();
$conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
$id = $_SESSION['id'];                      //Writer

$query = "delete from cart where user_name = '$id'";
$result = $conn->query($query);
if($result) {
    ?>
    <script>
        alert("장바구니를 모두 비웁니다.");
        location.replace("./basket.html");
    </script>
<?php    }
else {
    echo "fail";
}
?>