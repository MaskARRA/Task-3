
<?php
include 'db_conn.php';


if(isset($_POST['sub'])){
    $t=$_POST['text1'];
    $u=$_POST['text2'];
    $i="INSERT INTO news(short_description,article) VALUE ('$t','$u')";
    $stmt = $pdo->prepare($i);
    $stmt->execute();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    <table>
        <tr>
            <td>
                Description
                <input type="text" name="text1">
            </td>
        </tr>
        <tr>
            <td>
                Article
                <input type="text" name="text2">
            </td>
        </tr>
        <tr>
            <td>
                Create new article
                <input type="submit" value="submit" name="sub">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
