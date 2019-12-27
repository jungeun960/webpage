<?php
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("localhost","root","sql","data2019");

    $id = $_POST['name'];                      //Writer
    $pw = $_POST['pw'];                        //Password
    $category = $_POST['category'];            //category
    $content = $_POST['content'];               //Content
    $date = date('Y-m-d H:i:s');            //Date

    $URL = 'q_and_a.html';                   //return URL

    if(!$conn){
        die("연결실패:" . mysqli_connect_error());
    }

    $query = "insert into qa_board (number, category, content, date, id, password)
                                values(null,'$category', '$content', '$date','$id', '$pw')";

    //    var_export($query);


    $result = mysqli_query($conn, $query);
    echo mysqli_error($conn);

    //    var_export($result);

    if($result){
        ?>
        <script>
            alert("<?php echo "글이 등록되었습니다."?>");
            location.replace("<?php echo $URL?>");
        </script>
        <?php
    }
    else{
        echo "FAIL";
    }

    mysqli_close($conn);
?>


