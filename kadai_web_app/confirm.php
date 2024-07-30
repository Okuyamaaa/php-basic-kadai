<?php
session_start();
$name = $_POST["employee_name"];
$age = $_POST["employee_age"];
$department = $_POST["department"];

$errors=[];

if(empty($name)){
    $errors[]="氏名を入力してください。";
}

if(!is_numeric($age)){
    $errors[]="年齢には半角数値を入力してください。";
}


?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編_WEbアプリ作成課題</title>
    </head>

    <body>
        <h2>入力内容をご確認ください。</h2>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
        <table border="1">
            <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?php echo $name; ?> </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $age; ?> </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $department; ?> </td>
            </tr>
        </table>
        <p>
            <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
            <button id="cancel-btn" onclick="history.back();">キャンセル</button>
        </p>
         <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo "<font color='red'>{$error}</font><br>";
            }
            echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';

        }
        



        ?> 
    </body>
</html>