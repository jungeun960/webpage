<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'sql';
    $dbName = 'data2019';

    $conn = mysqli_connect($host, $user, $pw, $dbName);
    if(!$conn){
        die("연결실패:" . mysqli_connect_error());
    }
//    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "select * from User";
    $result = mysqli_query($conn,  $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "아이디: " . $row["id"]. " 비번:" . $row["Password"]. "<br>";
        }
    }else{
        echo "테이블에 데이터가 없습니다.";
    }

    mysqli_close($conn); // 디비 접속 닫기

//    if($mysqli){
//        echo "MySQL 접속 성공";
//    }else{
//        echo "MySQL 접속 실패";
//    }
?>
