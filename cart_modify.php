<?php
$conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
$count = $_POST[count];
$number = $_POST[number];

$query = "update cart set count='$count' where number=$number";
$result = $conn->query($query);
if($result) {
    ?>
    <script>
        alert("수량이 변경되었습니다.");
        location.replace("./basket.html");
    </script>
<?php    }
else {
    echo "fail";
}
?>