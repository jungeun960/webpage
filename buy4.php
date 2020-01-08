<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
$conn = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");

$id = $_SESSION['id'];                      //Writer
$date = date('Y-m-d');


$URL = 'buy_finish.html';                   //return URL

$query ="select * from cart where user_name = '$id' order by number desc";
$result = $connect->query($query);
$total = mysqli_num_rows($result);


var_export($total);

//echo $query;
//$price=0;
//
//while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
//    $subtotal = $rows['pro_price']*$rows['count'];
//    $price += $subtotal;
//}
//echo $price;
//
//$send =0;
//if($price < 30000){
//    $send = 2500;}
//
//if($price == 0){
//    $send = 0;}
//
//echo $send;



if(!$conn){
    die("연결실패:" . mysqli_connect_error());
}

//$query1 = "insert into payment_list (number, id, price1, price2, delivery, date)
//                            values(null,'$id',0,0, '주문완료','$date')";
//
////    var_export($query);
//
//
//$result1 = mysqli_query($conn, $query1);
echo mysqli_error($conn);

//    var_export($result);

if($result1){
    ?>

    <?php
}
else{
    echo "FAIL";
}

mysqli_close($conn);
?>


