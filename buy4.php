<?php
    session_start();
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");

    $id = $_SESSION['id'];                      //Writer
    $date = date('Y-m-d H:i:s');            //Date

    if(!$conn){
        die("연결실패:" . mysqli_connect_error());
    }

    // 장바구니에 있는거 구매내역으로 이동
    $sql = "select * from cart where user_name = '$id'";
    $result = mysqli_query($conn,  $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $count = $row["count"];
            $price = $row["pro_price"];
            $pro_name = $row["pro_name"];
            $pro_pic = $row["pro_pic"];

            $query1 = "insert into buy (number, id, count, pro_name, pro_pic, pro_price) 
                            values(null,'$id','$count','$pro_name','$pro_pic','$price')";
            $conn->query($query1);
        }
    }else{
        echo "테이블에 데이터가 없습니다.";
    }

    // 결제 정보 생성
    $query2 = "insert into payment_list (number, id, delivery, date) 
                            values(null,'$id','주문완료','$date')";
    $conn->query($query2);

    // 장바구니 비우기
    $query3 = "delete from cart where user_name = '$id'";
    $conn->query($query3);

    ?>
    <script>
        location.replace("./buy_finish.html");
    </script>
    <?php

    mysqli_close($conn); // 디비 접속 닫기
    ?>




