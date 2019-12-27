<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html class="no-js">
<head>
    <style>
        .js #fouc {display: none}
    </style>
    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css" />
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {

            $("#headers").load("headers.html");  // 원하는 파일 경로를 삽입하면 된다
            $("#footers").load("footer.html");  // 추가 인클루드를 원할 경우 이런식으로 추가하면 된다
            $("#menu").load("menu.html");

        });
    </script>


    <title>CHOIshop</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>
<body id="top">
<div id="fouc">

    <!-- Header -->
    <div id="headers"></div>
    <!--</header>-->

    <!-- Main -->
    <section id="main" class="wrapper style1">
        <header class="major">
            <h2>CHOIshop</h2>
            <p>www.CHOIshop.com</p>
        </header>
        <div class="container">
            <div class="row">

                <!-- menu -->
                <div>
                    <section>
                        <h3>C A T E G O R Y</h3>
                        <ul class="alt">
                            <li><a href="new.html">NEW</a></li>
                            <li><a href="best.html">BEST50</a></li>
                            <li><a href="top.html">TOP</a></li>
                            <li><a href="outer.html">OUTER</a></li>
                            <li><a href="pants.html">PANTS</a></li>
                            <li><a href="dress.html">DRESS</a></li>
                            <li><a href="skirt.html">SKIRT</a></li>


                        </ul>
                        <!--        <ul class="actions">-->
                        <!--            <li><a href="" class="button alt">Learn More</a></li>-->
                        <!--        </ul>-->
                    </section>
                    <hr />
                    <section>
                        <h3>C O M M U N I T Y</h3>
                        <ul class="alt">
                            <li><a href="notice.html">NOTICE</a></li>
                            <li><a href="q_and_a.html">Q&A</a></li>
                            <li><a href="review.html">REVIEW</a></li>


                        </ul>
                    </section>
                </div>
                <!--</menu>-->


                <div class="8u skel-cell-important">
                    <form action="" method="post">
                        <table  style="padding-top:50px" align = center border=0 cellpadding=2 >
                                <td bgcolor=white>
                                    <table class = "table2">

                                                <br> <br> <br> <br> <br>
                                                이 글은 비밀글 입니다. 비밀번호를 입력하여 주세요.<br>
                                                관리자는 확인 버튼만 누르시면 됩니다.<br>
                                                    <td>Password</td>
                                                    <td><input type="password" name="pw_chk" size="20px"></td>

                                                    <br>



                                    </table>
                                    <input type="submit" value="확인" style="text-align: right"/>
                                </td>

                        </table>

                    </form>
                </div>


                <?php
                    //    include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
                    $connect = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");
                    $number = $_GET['number']; /* bno함수에 idx값을 받아와 넣음*/


                    $query = "select category, content, date, id, password, number from qa_board where number =$number";
                    //$query = "select * from qa_board where number= $number";
                    $result = $connect->query($query);
                    $rows = mysqli_fetch_assoc($result);

                    //    $board = $sql->fetch_array();

                    $bpw = $rows['password'];

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
                        <?php } } ?>


            </div>

        </div>
    </section>

    <!-- Footer -->
    <div id="footers"></div>
    <!--</footer>-->
    </div> <!-- /#fouc -->

    <script>
        document.getElementById("fouc").style.display="block";
    </script>
</body>
</html>