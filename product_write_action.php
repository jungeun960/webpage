<?php

    // 파일 업로드 설정 시작
    $uploads_dir = './uploads';
    $allowed_ext = array('jpg','jpeg','png','gif');
    $field_name = 'myfile';
    // uploads 디렉토리가 없다면 생성
    if(!is_dir($uploads_dir)){
        if(!mkdir($uploads_dir, 0777))
        {
            die("업로드 디렉토리 생성에 실패 했습니다.");
        };
    }

    if(!isset($_FILES[$field_name]))
    {
        die("업로드된 파일이 없습니다.");
    }
    // 변수 정리
    $error = $_FILES[$field_name]['error'];
    $name = $_FILES[$field_name]['name'];
    // 오류 확인
    if( $error != UPLOAD_ERR_OK ) {
        switch( $error ) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo  "파일이 너무 큽니다. ($error)";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "파일이 부분적으로 첨부되었습니다. ($error)";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "파일이 첨부되지 않았습니다. ($error)";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "임시파일을 저정할 디렉토리가 없습니다. ($error)";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "임시파일을 생성할 수 없습니다. ($error)";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "업로드 불가능한 파일이 첨부 되었습니다. ($error)";
                break;
            default:
                echo "파일이 제대로 업로드되지 않았습니다. ($error)";
        }
        exit;
    }

    $upload_file = $uploads_dir.'/'.$name; // 저장될 디렉토리 및 파일명
    $fileinfo = pathinfo($upload_file); // 첨부파일의 정보를 가져옴
    $ext = strtolower($fileinfo['extension']);

    $i = 1;

    while(is_file($upload_file))
    {
        $name = $fileinfo['filename']."-{$i}.".$fileinfo['extension'];
        $upload_file = $uploads_dir.'/'.$name;
        $i++;
    }

    if( !in_array($ext, $allowed_ext) ) { // 확장자 확인
        echo "허용되지 않는 확장자입니다.";
        exit;
    }

    if ( !move_uploaded_file($_FILES[$field_name]['tmp_name'], $upload_file) ) { // 파일 이동
        echo "파일이 업로드 되지 않았습니다.";
        exit;
    }

    // DB연동
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("localhost","root","sql","data2019");

    $category = $_POST['category'];            //category
    $id = $_POST['name'];                      //Writer
    $price = $_POST['price'];                        //Price
    $content = $_POST['content'];               //Content
    $detail = $_POST['detail'];

    $name; // 저장한 파일 이름

    $URL = 'add.html';                   //return URL

    if(!$conn){
        die("연결실패:" . mysqli_connect_error());
    }

    $query = "insert into product_board (number, category, name, price, content, photo, detail)
                                    values(null,'$category', '$id','$price','$content', '$name','$detail')";

    //    var_export($query);


    $result = mysqli_query($conn, $query);
    echo mysqli_error($conn);

    //    var_export($result);

    if($result){
        ?>
        <script>
            alert("<?php echo "상품이 등록되었습니다."?>");
            location.replace("<?php echo $URL?>");
        </script>
        <?php
    }
    else{
        echo "FAIL";
    }

    mysqli_close($conn);
    ?>


