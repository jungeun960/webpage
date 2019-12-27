<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {

            $("#headers").load("headers.html");  // 원하는 파일 경로를 삽입하면 된다
            $("#footers").load("footer.html");  // 추가 인클루드를 원할 경우 이런식으로 추가하면 된다
            $("#menu").load("menu.html");

        });
    </script>
    <style>
        table.table2{
            border-collapse: separate;
            border-spacing: 1px;
            text-align: left;
            line-height: 1.5;
            border-top: 1px solid #ccc;
            margin : 20px 10px;
        }
        table.table2 tr {
            width: 50px;
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
        table.table2 td {
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }

    </style>


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
            <div id="menu"></div>
            <!--</menu>-->

            <?php
            $conn = mysqli_connect("localhost","root","sql","data2019");
            $id = $_GET[id];
            $number = $_GET[number];
            $query = "select title, content, date, id from notice_board where number=$number";
            $result = $conn->query($query);
            $rows = mysqli_fetch_assoc($result);

            $title = $rows['title'];
            $content = $rows['content'];
            $usrid = $rows['id'];

            session_start();

            ?>

            <div class="8u skel-cell-important">


                <h2> 공지사항 수정하기 </h2>

                <form method = "get" action = "notice_modify_action.php">
                    <table  style="padding-top:50px" align = center width=800 border=0 cellpadding=2 >

                        <tr>
                            <td bgcolor=white>
                                <table class = "table2">
                                    <tr>
                                        <td>작성자</td>
                                        <td><?=$usrid?></td>
                                    </tr>

                                    <tr>
                                        <td>제목</td>
                                        <td><input type = text name = title size=60 value="<?=$title?>"></td>
                                    </tr>

                                    <tr>
                                        <td>내용</td>
                                        <td><textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                                    </tr>

                                </table>

                                <center>
                                    <input type="hidden" name="number" value="<?=$number?>">
                                    <input type = "submit" value="작성">
                                </center>
                            </td>
                        </tr>
                    </table>

            </div>

        </div>

    </div>
</section>

<!-- Footer -->
<div id="footers"></div>
<!--</footer>-->

</body>
</html>