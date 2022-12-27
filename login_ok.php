
<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
session_start();
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php";


?>    

    <div class="mainDiv">
        <th>    
            <td>이름</td>
        </th>
        <?
            $que = "select * from userInfo where userId='".$_REQUEST['id']."' and userPd = '".$_REQUEST['password']."' ";
            $res = mysql_query($que);
            $count = mysql_num_rows($res);
            if($count == 0 ){
                echo "<script>alert('아이디 및 비밀번호가 틀렸습니다.'); location='index.php';</script>";
            }
            $row = mysql_fetch_array($res);
            $_SESSION['USER_ID']=$row["userId"];
            echo "<script>location='page/index.php';</script>";
            ?>
    </div>
