<?php
$conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
$number = $_GET[number];
$query = "delete from qa_board where number = '$number'";
$result = $conn->query($query);
if($result) {
    ?>
    <script>
        alert("Q&A 게시글이 삭제되었습니다.");
        location.replace("./q_and_a.html");
    </script>
<?php    }
else {
    echo "fail";
}
?>
