<?php
session_start();
//    include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
$connect = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");
$number = $_GET['number']; /* bno함수에 idx값을 받아와 넣음*/
                  //Password


$query = "select category, content, date, id, password, number from qa_board where number =$number";
//$query = "select * from qa_board where number= $number";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

//    $board = $sql->fetch_array();

$bpw = $rows['password'];

if($_SESSION['id']=='admin') {
    ?>
    <script type="text/javascript">location.replace("qa_view.php?number=<?php echo $rows['number']?>");</script><!-- pwk와 bpw값이 같으면 read.php로 보내고 -->
    <?php
}else{

    if(isset($_POST['pw_chk'])) //만약 pw_chk POST값이 있다면
    {
        $pwk = $_POST['pw_chk']; // $pwk변수에 POST값으로 받은 pw_chk를 넣습니다.
        if($pwk == $bpw) //다시 if문으로 DB의 pw와 입력하여 받아온 bpw와 값이 같은지 비교를 하고
        {
            ?>
            <script type="text/javascript">location.replace("qa_view.php?number=<?php echo $rows['number']?>");</script><!-- pwk와 bpw값이 같으면 read.php로 보내고 -->
            <?php
        }else{ ?>
            <script type="text/javascript">alert('비밀번호가 틀립니다');</script><!--- 아니면 비밀번호가 틀리다는 메시지를 보여줍니다 -->
        <?php } } } ?>