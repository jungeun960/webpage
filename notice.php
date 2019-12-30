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
        #page_num {
            font-size: 14px;
            margin-left: 260px;
            margin-top:30px;
        }
        #page_num ul li {
            float: left;
            margin-left: 10px;
            text-align: center;
        }
        .fo_re {
            font-weight: bold;
            color:red;
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
                $connect = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");
                $query ="select * from notice_board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
                ?>
                <div class="8u skel-cell-important">
                    <h2> NOTICE </h2>
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

                        <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }else{
                            $page = 1;
                        }
                        $query3 = "select * from notice_board";
                        $result3 = $connect->query($query3);
                        $row_num = mysqli_num_rows($result3);
                        $list = 10; //한 페이지에 보여줄 개수
                        $block_ct = 5; //블록당 보여줄 페이지 개수
                        $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
                        $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
                        $block_end = $block_start + $block_ct - 1; //블록 마지막 번호
                        $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
                        if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
                        $total_block = ceil($total_page/$block_ct); //블럭 총 개수
                        $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.
                        $query4 = "select * from notice_board order by number desc limit $start_num, $list";
                        $result4 = $connect->query($query4);
                        while($board = $result4->fetch_array()){
                        $title=$board["title"];
                        ?>

                        <tbody>

                        <td width = "50" align = "center"><?php echo $total?></td>

                        <?php
                        $boardtime = $rows['date']; //$boardtime변수에 rows['date']값을 넣음
                        $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
                        if($boardtime==$timenow){
                            $img = "<img src='/images/new.png' alt='new' title='new' />";
                        }else{
                            $img ="";
                        }
                        ?>

                        <td width = "500" align = "center">
                            <a href = "notice_view.php?number=<?php echo $rows['number']?>">
                                <?php echo $rows['title']?> &nbsp <?php echo $img; ?></td>

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


                    <div id="page_num">
                        <ul>
                            <?php
                            if($page <= 1)
                            { //만약 page가 1보다 크거나 같다면
                                echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시
                            }else{
                                echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
                            }
                            if($page <= 1)
                            { //만약 page가 1보다 크거나 같다면 빈값
                            }else{
                                $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
                                echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
                            }
                            for($i=$block_start; $i<=$block_end; $i++){
                                //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
                                if($page == $i){ //만약 page가 $i와 같다면
                                    echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
                                }else{
                                    echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
                                }
                            }
                            if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
                            }else{
                                $next = $page + 1; //next변수에 page + 1을 해준다.
                                echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
                            }
                            if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
                                echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
                            }else{
                                echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
                            }
                            ?>
                        </ul>
                    </div>


                    <!--                검색-->
                    <div class="main">
                        <form action="/page/board/search_result.php" method="get">
                            <!-- Another variation with a button -->
                            <div style="float: left; width: 70%; padding-left: 40px" >
                                <input type="text" name="search" class="form-control" placeholder="Search this blog">
                            </div>
                            <div style="float: left; width: 30%;">
                                <button class="btn btn-secondary" type="button" style="width: 45px; height: 45px">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <br>
                    </div>

                    <?php
                    if($_SESSION['id']=='admin') {
                        ?>
                        <div class = text>
                            <font style="cursor: hand"onClick="location.href='./notice_write.php'">글쓰기</font>
                        </div>
                        <?php
                    }else{
                        ?>
                        <!--                    <div class = text>-->

                        <!--                    <font style="cursor: hand"onClick="location.href='./notice_write.php'"><?php echo $_SESSION['id']?> 권한음슴</font>-->
                        <!--                    </div>-->
                        <?php
                    }
                    ?>


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