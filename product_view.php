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

        a:link {color : #57A0EE; text-decoration:none;}

        table {
            width: 100%;
            border: 1px solid #444444;
        }

        th, td {

            padding: 10px;
        }

        .view_table {
            margin-top: 30px;
            border: 1px solid #444444;
        }
        .view_title {
            height: 30px;
            text-align: center;
            background-color: white;
            width: 1000px;
            border: 1px solid #444444;

        }
        .view_id {
            text-align: center;
            background-color: white;

            width: 30px;
        }
        .view_id2 {
            background-color: white;
            width: 60px;
            border: 1px solid #444444;
            margin-left: 20px;
        }
        .view_hit {
            background-color: white;
            width: 30px;
            text-align: center;
        }
        .view_hit2 {
            background-color: white;
            width: 60px;
        }
        .view_content {
            padding: 20px;
            height: 500px;
            background-color: white;
            border: 1px solid #444444;
        }
        .view_btn {
            width: 700px;
            height: 200px;
            text-align: center;
            margin: auto;
            margin-top: 50px;
        }
        .view_btn1 {
            height: 50px;
            width: 100px;
            font-size: 20px;
            text-align: center;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
        }
        .view_comment_input {
            width: 700px;
            height: 500px;
            text-align: center;
            margin: auto;
        }
        .view_text3 {
            font-weight: bold;
            float: left;
            margin-left: 20px;
        }
        .view_com_id {
            width: 100px;
        }
        .view_comment {
            width: 500px;
        }

        #test_btn1{
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            margin-right:-4px;
        }

        #test_btn2{
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            margin-left:-3px;
        }

        #btn_group button{
            border: 1px solid snow;
            background-color: rgba(0,0,0,0);
            color: slategray;
            padding: 10px;
        }
        #btn_group button:hover{
            color:white;
            background-color: lightslategrey;
        }

        div#side_left{
            width:490px;
            height:490px;
            float:left;
            margin:5px;
        }
        #side_left_box{
            width:95%;
            height:45%;

            float:left;
            margin:5px;
        }
        #mid_content{
            width:400px;
            height:400px;

            float:left;
            margin:15px;
        }
        #side_content_box{
            display: inline;
            background-color:white;
            margin:15px;
        }




    </style>

    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>

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


                <?php
                $conn = mysqli_connect("localhost","root","sql","data2019");
                $number = $_GET['number'];

                $query = "select category, name, price, content, photo from product_board where number =$number";
                $result = $conn->query($query);
                $rows = mysqli_fetch_assoc($result);
                ?>


                <div>
                    <div id = "side_left">
                        <img src="/uploads/<?php echo $rows['photo']; ?>" align = "center" alt="" width="490" height="490"/>

                    </div>
                    <div id = "mid_content">
                        <?php echo $rows['name']?>
                        <br>
                        <br>
                        <div id = "side_content_box">가격 &nbsp &nbsp &nbsp &nbsp</div>
                        <div id = "side_content_box"><?php echo $rows['price']?> </div>

                        <br><br>
<!--                        <div id = "side_content_box">코멘트  &nbsp &nbsp</div>-->
                        <div id = "side_content_box"><?php echo $rows['content']?></div>

                        <br><br><br>
                        <input type = "button" value="BUY" width="300">
                        <input type = "button" value="CART" width="300">

                    </div>
                    <table >
                    </table>

                    <!-- MODIFY & DELETE -->
                    <div class="view_btn">
                        <div id="btn_group">
                            <button  onclick="location.href='./q_and_a.html'">목록으로</button>
                            <button  onclick="location.href='./notice_modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
                            <button  onclick="location.href='./notice_delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
                        </div>
                    </div>



                </div>

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