<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php session_start(); ?>

<html  class="no-js">
<head>
    <style>
        .js #fouc {display: none}
        table{
            border-top: 1px solid #444444;
            border-collapse: collapse;
        }
        tr{
            border-bottom: 1px solid #444444;
            padding: 10px;
        }
        td{
            border-bottom: 1px solid #efefef;
            padding: 10px;
        }
        table .even{
            background: #efefef;
        }
        .text{
            text-align:center;
            padding-top:20px;
            color:#000000
        }
        .text:hover{
            text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
        .main {
            width: 50%;
            margin: 50px auto;
        }
        /* Bootstrap 4 text input with search icon */
        .has-search .form-control {
            padding-left: 2.375rem;
        }
        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
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
    <header id="header" class="skel-layers-fixed">
        <h1><a href="main.html">CHOIshop</a></h1>

        <nav id="nav">
            <ul>
                <!--            <li><a href="main.html">Home</a></li>-->
                <!--            <li><a href="notice.html">NOTICE </a></li>-->
                <!--            <li><a href="q_and_a.html">Q&A </a></li>-->
                <!--            <li><a href="basket.html">장바구니 </a></li>-->
                <!--            <li><a href="registrater.html">회원가입 &nbsp &nbsp</a></li>-->

                <?php
                $connect = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

                session_start();

                if(isset($_SESSION['id'])) {

                    echo $_SESSION['id'];?>님 안녕하세요
                    <li><a href="logout.php">&nbsp &nbsp &nbsp 로그아웃 </a></li>
                    <li><a href="basket.html">장바구니 </a></li>
                    <li><a href="main.html">Home</a></li>
                    <!--                        <li><a href="registrater.html">회원가입 </a></li>-->
                    <li><a href="notice.html">NOTICE </a></li>
                    <li><a href="q_and_a.html">Q&A </a></li>
                    <li><a href=# onclick="window.open('http://192.168.56.101:52273/','name','resizable=no, width=500, height=600, left=100px,top=80px');return false">채팅 &nbsp &nbsp &nbsp &nbsp</a></li>
                    <!--                        <button onclick="location.href='./logout.php'">로그아웃</button>-->
                    <?php
                    if($_SESSION['id']=='admin') {
                        ?>
                        <li><a href="add.html">관리자 페이지 &nbsp &nbsp</a></li>
                        <?php
                    }
                    ?>
                    <br/>
                    <?php
                }
                else {
                    ?>
                    <li><a href="main.html">Home</a></li>
                    <li><a href="login.html">로그인</a></li>
                    <li><a href="registrater.html">회원가입 </a></li>
                    <!--                        <li><a href="basket.html">장바구니 </a></li>-->
                    <li><a href="notice.html">NOTICE </a></li>
                    <li><a href="q_and_a.html">Q&A &nbsp &nbsp &nbsp &nbsp</a></li>
                    <!--                        <button onclick="location.href='./login.php'">로그인</button>-->
                    <br />

                <?php   }
                ?>



            </ul>
        </nav>
    </header>
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
                <div >
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
                $search_con = $_GET['search'];

                $connect = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");
                $query ="select * from notice_board where title like '%$search_con%' order by number desc";

                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

                ?>
                <div class="8u skel-cell-important">



                    <h2>'<?php echo $search_con; ?>' 검색결과</h2>
                    <h4 style="margin-top:30px;"><a href="/notice.html">뒤로가기</a></h4>
                    <table align = center>
                        <thead align = "center">
                        <tr>
                            <td width = "100" align="center">번호</td>
                            <td width = "500" align = "center">제목</td>
                            <td width = "100" align = "center">작성자</td>
                            <td width = "300" align = "center">날짜</td>
                            <td width = "100" align = "center">조회수</td>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                            if($total%2==0){
                                ?>                      <tr class = "even">
                            <?php   }
                            else{
                                ?>                      <tr>
                            <?php } ?>
                            <td width = "50" align = "center"><?php echo $total?></td>

                            <?php
                            $boardtime = $rows['date']; //$boardtime변수에 board['date']값을 넣음
                            $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음

                            if($boardtime==$timenow){
                                $img = "<img src='/images/new.png' alt='new' title='new' />";
                            }else{
                                $img ="";
                            }
                            ?>

                            <td width = "500" align = "center">
                                <a href = "notice_view.php?number=<?php echo $rows['number']?>">
                                    <?php echo $rows['title']?> <?php echo $img; ?></td>

                            <td width = "100" align = "center"><?php echo $rows['id']?></td>
                            <td width = "200" align = "center"><?php echo $rows['date']?></td>
                            <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                            </tr>
                            <?php
                            $total--;
                        }
                        ?>
                        </tbody>
                    </table>

                    <!--                검색-->

                    <div class="main">
                        <form action="search_result.php" method="get">
                            <div style="float: left; width: 70%; padding-left: 40px" >
                                <input type="text" name="search" class="form-control" placeholder="Search this blog">
                            </div>

                            <button style="width: 45px; height: 45px">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!--                검색 끝-->




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