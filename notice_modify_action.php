
<?php
    $conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $date = date('Y-m-d H:i:s');
    $query = "update notice_board set title='$title', content='$content', date='$date' where number=$number";
    $result = $conn->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./notice_view.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
