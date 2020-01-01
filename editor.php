<!DOCTYPE HTML>
<html>
<html class="no-js">
<style>

    .js #fouc {display: none}

    a:link {color : #57A0EE; text-decoration:none;}

    table.table2{
        border-collapse: separate;
        border-spacing: 1px;
        text-align: left;
        line-height: 1.5;
        border-top: 1px solid #ccc;
        margin : 20px 10px;
    }
    table.table2 tr {
        width: 40px;
        padding: 10px;
        font-weight: bold;
        vertical-align: top;
        border-bottom: 1px solid #ccc;
    }
    table.table2 td {
        padding: 10px;
        vertical-align: middle;
        border-bottom: 1px solid #ccc;
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

<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    //<![CDATA[
    function LoadPage() {
        CKEDITOR.replace('contents');   //ckeiditor을 들고오겠다
    }
    function FormSubmit(f) {
        CKEDITOR.instances.contents.updateElement();
        if(f.contents.value == "") {
            alert("내용을 입력해 주세요.");
            return false;
        }
        alert(f.contents.value);
        // 전송은 하지 않습니다.
        return false;
    }
    //]]>
</script>

</head>

<body id="top">
<div id="fouc">
    <!-- Header -->
    <!--    <div id="headers"></div>-->
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
                    <li><a href="q_and_a.html">Q&A &nbsp &nbsp &nbsp &nbsp</a></li>
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

        <script>
            function write() {

                var str = document.getElementById("textarea").value;
                str = str.replace(/(?:\r\n|\r|\n)/g, '<br/>');
                document.getElementById("textarea").value = str;
            }
        </script>

        <div class="container">
            <div class="row">

                <!-- menu -->
                <div>
                    <section>
                        <h3>C A T E G O R Y</h3>
                        <br>
                        <ul class="actions" >
                            <li><a href="add.html" class="button alt" style="width: 200px">상품 등록하기</a></li>
                        </ul>
                        <ul class="actions">
                            <li><a href="popadd.html" class="button alt" style="width: 200px">팝업창 등록하기</a></li>
                        </ul>
                    </section>
                    <hr/>
                </div>
                <!--</menu>-->


                <h2> 상품 등록하기 </h2>
                <div class="8u skel-cell-important">
                    <form method = "post" action = "product_write_action.php" enctype="multipart/form-data">
                        <table  style="padding-top:50px" align = center border=0 cellpadding=2 >

                            <tr>
                                <td bgcolor=white>
                                    <table class = "table2">
                                        <tr>
                                            <td>카테고리</td>
                                            <td>
                                                <!--                                            <input type = text name =title size=60>-->
                                                <select id="browsers" name="category" size="1" required autofocus>
                                                    <option value="TOP" selected>TOP</option>
                                                    <option value="OUTER">OUTER</option>
                                                    <option value="PANTS">PANTS</option>
                                                    <option value="DRESS" >DRESS</option>
                                                    <option value="SKIRT" >SKIRT</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>제품 이름</td>
                                            <td><input type = text name =name size=20> </td>
                                        </tr>

                                        <tr>
                                            <td>판매가</td>
                                            <td><input type = text name =price size=20> </td>

                                        </tr>

                                        <tr>
                                            <td>코멘트</td>
                                            <td><textarea name =content cols=85 rows=4 wrap="hard"></textarea></td>

                                        </tr>


                                        <tr>
                                            <td> 대표사진 &nbsp &nbsp </td>
                                            <td>
                                                <input type='file' name='myfile'>
                                                <!--                                            <form action="./file_upload.php" enctype="multipart/form-data" method='post'>-->
                                                <!--                                                -->
                                                <!--                                                <button>보내기</button>-->
                                                <!--                                            </form>-->
                                            </td>

                                        </tr>


                                    </table>



                                    <center>
                                        <input type = "submit" value="작성">
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <body onload="LoadPage();">
                <form id="EditorForm" name="EditorForm" onsubmit="return FormSubmit(this);">
                    <!--                                        <div>-->
                    <!--                                            <label for="title">제목</label>-->
                    <!--                                            <input type="text" id="title" name="title" size="40" />-->
                    <!--                                        </div>-->
                    <div>
                        <label for="contents">상세페이지 작성</label>
                        <textarea id="contents" name="contents"></textarea>
                    </div>
                    <div><input type="submit" value="전송"></div>
                </form>
                </body>

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

