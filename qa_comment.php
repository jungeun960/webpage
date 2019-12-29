<?php
    session_start();
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("localhost","root","sql","data2019");

    $content = $_POST['content'];               //Content
    $date = date('Y-m-d H:i:s');            //Date
    $bNo = $_POST['bno'];


    if(!$conn){
        die("연결실패:" . mysqli_connect_error());
    }

    $query = "insert into reply (idx, con_num, content, date)
                                    values(null,'$bNo', '$content', '$date')";

    //    var_export($query);


    $result = mysqli_query($conn, $query);
    echo mysqli_error($conn);

    //    var_export($result);

    if($result){
        ?>
        <script>
            alert("<?php echo "댓글이 등록되었습니다."?>");
            location.replace("./qa_view.php?number=<?=$bNo?>");
        </script>
        <?php
    }
    else{
        echo "FAIL";
    }

    mysqli_close($conn);
?>


