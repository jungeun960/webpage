<?php
session_start();
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("localhost","root","sql","data2019");

    $id = $_SESSION['id'];                      //Writer
    $pw = $_POST['pw'];                        //Password
    $title = $_POST['title'];                  //Title
    $content = $_POST['content'];               //Content
    $date = date('Y-m-d H:i:s');            //Date

    $URL = 'notice.html';                   //return URL

    if(!$conn){
        die("연결실패:" . mysqli_connect_error());
    }

    $query = "insert into notice_board (number,title, content, date, hit, id,password) 
                            values(null,'$title', '$content', '$date',0, '$id', '$pw')";

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


