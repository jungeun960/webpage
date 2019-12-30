<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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


                <h2> POPUP 등록하기 </h2>
                <div class="8u skel-cell-important">
                    <form method = "post" action = "pop_write_action.php" enctype="multipart/form-data">
                        <table  style="padding-top:50px" align = center border=0 cellpadding=2 >

                            <tr>
                                <td bgcolor=white>
                                    <table class = "table2">
                                        
                                        <tr>
                                            <td>제목</td>
                                            <td><input type = text name =title size=20> </td>
                                        </tr>

                                        <tr>
                                            <td> POPUP 이미지 &nbsp &nbsp </td>
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
