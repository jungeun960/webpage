<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
$conn = mysqli_connect("localhost","root","sql","data2019");

$pro_num = $_POST['pro_num'];
$pro_name = $_POST['pro_name'];
$pro_pic = $_POST['pro_pic'];                        //Password
$pro_price = $_POST['pro_price'];            //category
$user_name = $_SESSION['id'];                      //Writer

$URL = 'q_and_a.html';                   //return URL

if(!$conn){
    die("연결실패:" . mysqli_connect_error());
}

$count = "select * from cart where pro_num = '$pro_num' and user_name = '$user_name'";
$result0 = mysqli_query($conn, $count);
$total = mysqli_num_rows($result0);
//echo '$total : '.$total.'<br>';
//
//if (mysqli_num_rows($result0) > 0) {
//    while($row = mysqli_fetch_assoc($result0)) {
//        echo "이름: " . $row["pro_name"]. " 개수:" . $row["count"]. "<br>";
//    }
//}else{
//    echo "테이블에 데이터가 없습니다.";
//}

//    var_export($total);

if($total==0) {
    $query = "insert into cart (number, count, pro_num, pro_name, pro_pic, pro_price, user_name)
                                values(null, 1, $pro_num, '$pro_name', '$pro_pic','$pro_price', '$user_name')";
}
else{
    $query ="update cart set count=count+1 where pro_num=$pro_num and user_name = '$user_name'";

}

//    var_export($query);


$result = mysqli_query($conn, $query);
echo mysqli_error($conn);

//    var_export($result);

if($result){
    ?>
    <!--팝업창-->
    <script>
        var answer;
        answer = confirm("장바구니로 이동하시겠습니까?");
        //확인을 선택한 경우 자바스크립트를 호출할 때 같이 넘어온 url이라는 변수에 들어있는 주소로 페이지 이동
        if(answer == true){
            location = "basket.html";
        }else{
            location = "product_view.php?number=<?php echo $pro_num ?>";
        }

    </script>

    <?php
}
else{
    echo "FAIL";
}

mysqli_close($conn);
?>