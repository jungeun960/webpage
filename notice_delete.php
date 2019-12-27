<?php
    $conn = mysqli_connect("localhost","root","sql","data2019") or die ("connect fail");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $date = date('Y-m-d H:i:s');
    $query = "delete from notice_board where number = '$number'";
    $result = $conn->query($query);
    if($result) {
        ?>
        <script>
            alert("삭제되었습니다.");
            location.replace("./notice.html");
        </script>
    <?php    }
    else {
        echo "fail";
    }
?>
