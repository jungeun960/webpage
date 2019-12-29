<?php
$conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
$idx = $_GET[idx];
$con_num = $_GET[con_num];

$query = "delete from reply where idx = '$idx' AND con_num ='$con_num'";
$result = $conn->query($query);
if($result) {
    ?>
    <script>
        alert("삭제되었습니다.");
        location.replace("./qa_view.php?number=<?=$con_num?>");
    </script>
<?php    }
else {
    echo "fail";
}
?>
