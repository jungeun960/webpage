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


        html, body {
            background-color: #f0f2fa;
            color: #555f77;
            -webkit-font-smoothing: antialiased;
        }

        input, textarea {
            outline: none;
            border: none;
            display: block;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            font-size: 16px;
            color: #555f77;

        }

        p {
            line-height: 21px;
        }

        .comments {
            margin: -150px auto 0;
            max-width: 972px;
            padding: 0 20px;
        }

        .comment-wrap {
            margin-bottom: 20px;
            display: table;
            width: 100%;
            min-height: 85px;
        }

        .photo {
        //background-color: #ff6666;
            padding-top: 10px;
            display: table-cell;
            width: 56px;

        .avatar {
        @include size(rem(36));
        //background-color: #0094ff;
            border-radius: 50%;
            background-size: contain;
        }
        }

        .comment-block {
            padding: 16px;
            background-color: #fff;
            display: table-cell;
            vertical-align: top;
            border-radius: 3px;
            box-shadow: 0 1px 3px 0 rgba(0,0,0,0.08);

        textarea {
            width: 100%;
            resize: none;
        }
        }

        .comment-text {
            margin-bottom: 20px;
        }

        .bottom-comment {
            color: #acb4c2;
            font-size: 14px;
        }

        .comment-date {
            float: left;
        }

        .comment-actions {
            float: right;

        li {
            display: inline;
            margin: -2px;
            cursor: pointer;

        .complain {
             padding-right: 12px;
             border-right: 1px solid #e1e5eb;
         }

        .reply {
             padding-left: 12px;
             padding-right: 2px;
         }

        :hover {
             color: #0095ff;
         //text-decoration: underline;
         }
        }
        }


    </style>

    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>

    <script type="text/javascript" src="/js/common.js"></script>

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


                $query = "select category, content, date, id from qa_board where number =$number";
                $result = $conn->query($query);
                $rows = mysqli_fetch_assoc($result);
                ?>


                <div class="8u skel-cell-important">
                    <!-- 글 불러오기 -->
                    <table class="view_table" align=center>
                        <tr>
                            <td colspan="4" class="view_title"><?php echo $rows['category']?></td>
                        </tr>
                        <tr>
                            <td class="view_id">작성자</td>
                            <td class="view_id2"><?php echo $rows['id']?></td>
                        </tr>


                        <tr>
                            <td colspan="4" class="view_content" valign="top">
                                <?php echo $rows['content']?></td>
                        </tr>
                    </table>


                    <!-- MODIFY & DELETE -->
                    <div class="view_btn">
                        <div id="btn_group">
                            <button  onclick="location.href='./q_and_a.html'">목록으로</button>
                            <button  onclick="location.href='./notice_modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
                            <button  onclick="location.href='./notice_delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
                        </div>
                    </div>

                    <div class="comments">
                        <div class="comment-wrap">
                            <div class="photo">
                                <img src="images/shop.PNG" align = "center" width="100" height="100" alt="" />
                            </div>
                            <div class="comment-block">
                                <form action="qa_comment.php" method="post">
                                    <input type="hidden" name="bno" value="<?php echo $number?>">
                                    <textarea name="content" id="content" cols="30" rows="3" placeholder="Add comment..."></textarea>

                                    <div style="float: right; margin: 10px">
                                        <input type = "submit" value="작성">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php
                            $connect = mysqli_connect("localhost","root","sql","data2019")or die ("connect fail");
                            $query1 ="select * from reply where con_num = $number order by con_num desc";
                            $result1 = $connect->query($query1);
                            $total1 = mysqli_num_rows($result1);

//                             var_export($total1);

                        ?>

                        <?php
                        while($rows1 = mysqli_fetch_assoc($result1)){ //DB에 저장된 데이터 수 (열 기준)
                            if($total1%2==0){
                                ?>
                            <?php   }
                            else{
                                ?>
                            <?php } ?>
                            <div class="comment-wrap">
                                <div class="photo">
                                    <img src="images/shop.PNG" align = "center" width="100" height="100" alt="" />
                                </div>
                                <div class="comment-block">
                                    <p class="comment-text"><?php echo $rows1['content']?></p>
                                    <div class="bottom-comment">
                                        <div class="comment-date"><?php echo $rows1['date']?></div>
                                        <ul class="comment-actions">
                                            <li class="reply"><a href="">수정</a> </li>
                                            <li class="reply"><a href="./qa_delete.php?idx=<?=$rows1['idx']?>&con_num=<?=$rows1['con_num']?>">삭제</a> </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $total1--;
                        }
                        ?>



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