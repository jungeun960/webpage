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

        div#side_left{
            width:490px;
            height:490px;
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



        .layer_bg{position:fixed; width:100%; height:100%; background: rgba(0,0,0,0.7); left:0; top:0}
        .layer_wrap{position:absolute; width:300px; height:100px; background:#fff; text-align: center}


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

    <script>
        $(function () {
            // 레이어 display none 상태
            $(".layer_bg, .layer_wrap").hide();
            //레이어팝업 위치 지정 function 만들기
            function layer_position(){
                var win_W = $(window).width();
                var win_H = $(window).height();
                $(".layer_wrap").css({'left':(win_W-300)/2, 'top':(win_H-100)/2});
            };
            //레이어팝업 open 상태 function 만들기
            function layer_open(no){
                $(".layer_wrap[layer="+no+"]").fadeIn();
                $(".layer_bg").fadeIn();
                layer_position();
                //레이어 영역 외 바탕화면 클릭시 화면 닫기
                $(".layer_bg").click(function (e) {
                    if(!$(".layer_wrap").has(e.target).length){
                        layer_close();
                    };
                });
            };
            //레이어팝업 close 상태 function 만들기
            function layer_close(){
                $(".layer_wrap, .layer_bg").fadeOut();
            };
            //링크 클릭시 해당 레이어팝업 호출
            $(".btn_layer").click(function () {
                var no = $(this).attr("layer");
                layer_open(no);
            });
            //닫기 버튼 클릭시 레이어 닫기
            $(".btn_close").click(function () {
                layer_close();
            });
            //반응형 대응 - 레이어 위치 잡기
            $(window).resize(function () {
                layer_position();
            });
        })
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

                        <br><br>
<!--                        <div id = "side_content_box">수량</div>-->
<!---->
<!---->
<!--                            <td><span style="font-size:12px;color:#555555;">-->
<!--                            <span id='NewProductQuantityDummy' >-->
<!--                                <span class="quantity">-->
<!--                                    <input id="quantity" name="quantity_name" style="width: 30px;height: 18px;border: 1px solid #BCBCBC;" value="" type="text"  />-->
<!--                                    <img src="//img.echosting.cafe24.com/design/skin/mono/product/btn_basketUp.gif"  class="QuantityUp" alt="수량증가" />-->
<!--                                    <img src="//img.echosting.cafe24.com/design/skin/mono/product/btn_basketDown.gif"  class="QuantityDown" alt="수량감소" />-->
<!--                                </span>-->
<!--                            </span>-->
<!--                        </span>-->
<!--                            </td>-->


<!--                        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
<!--                        <div class="wrap">-->
<!--                            <div class="layer_bg"></div>-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="javascript:;" class="btn_layer" layer="1">팝업 열기 1번</a>-->
<!--                                    <div class="layer_wrap" layer="1">-->
<!--                                        <p>안녕하세요 레이어팝업 1번 창입니다.</p>-->
<!--                                        <a href="javascript:;" class="btn_close">닫기</a>-->
<!--                                    </div>-->
<!--                                </li>-->
<!---->
<!--                            </ul>-->
<!--                        </div>-->


                        <br><br><br>
                        <input type = "button" value="BUY" width="300">
                        <input type = "button" value="CART" width="300" onClick="location.href='/basket.html'">

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