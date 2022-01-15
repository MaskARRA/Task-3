
<?php
include 'db_conn.php';


if(isset($_POST['sub'])){
    $t=$_POST['text1'];
    $u=$_POST['text2'];
    $i="INSERT INTO news(short_description,article) VALUE ('$t','$u')"; 
    $stmt = $dsn->prepare($i);
    $stmt->bindValue('short_description', $t,  PDO::PARAM_STR);
    $stmt->bindValue('article', $u,  PDO::PARAM_STR);
    if($stmt){
        $stmt->execute();
        header ('location:index.php');
    }
    
    
    else{
        header("HTTP/1.0 404 Not Found");
        echo "Oops, page wasn't found!";
       
    }
 
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
<div>
    <table>
        
        <thead>
            <tr>
                <th style="text-align:center;">ID</th>
                <th style="text-align:center;">Description</th>
                <th style="text-align:center;">Article</th>
            </tr>
        </thead>
        <?php

        $result= $dsn->prepare("SELECT * FROM news ORDER BY id ASC");
        $result->bindValue(':short_description', PDO::PARAM_STR);
        $result->bindValue(':article', PDO::PARAM_STR);
        $result->execute();
        for ($i=0; $row = $result->fetch(\PDO::FETCH_ASSOC); $i++) {
        $id=$row['id'];

        ?>
        <tbody>
            <tr>
                <td style="text-align:center; word-break:break-all; width:300px;"><?php echo $row ['id']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px;"><?php echo $row ['short_description']; ?></td>
                <td style="text-align:center; word-break:break-all; width:300px;"><?php echo $row ['article']; ?></td>
                <td style="text-align:center; width:350px;"><a href="x.php<?php echo '?id='.$id; ?>">Select</a></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>
</body>
</html>
