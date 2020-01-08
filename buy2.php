<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
$conn = mysqli_connect("localhost","root","sql","data2019");

$id = $_SESSION['id'];                      //Writer
$name = $_POST['name'];
$ad1 = $_POST['ad1'];
$ad2 = $_POST['ad2'];
$ad3 = $_POST['ad3'];
$ad4 = $_POST['ad4'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$email = $_POST['email'];
$message = $_POST['message'];

$URL = 'buy3.html';                   //return URL

if(!$conn){
    die("연결실패:" . mysqli_connect_error());
}

$query = "insert into order_info (id, name, ad1, ad2, ad3, ad4, phone1, phone2, email, message) 
                            values('$id','$name','$ad1','$ad2', '$ad3','$ad4', '$phone1', '$phone2', '$email','$message')";

//    var_export($query);


$result = mysqli_query($conn, $query);
echo mysqli_error($conn);

//    var_export($result);

if($result){
    ?>
    <script>
        alert("<?php echo "주문정보가 등록되었습니다."?>");
        location.replace("<?php echo $URL?>");
    </script>
    <?php
}
else{
    echo "FAIL";
}

mysqli_close($conn);
?>


