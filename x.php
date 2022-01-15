<?php

    include 'db_conn.php';
    $id = $_GET['id'];
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     
        $result= $dsn->prepare("SELECT * FROM news WHERE id='$id'");
        $result->bindParam('id', $id, PDO::PARAM_INT);
        $result->execute();
        
        for ($i=0; $row = $result->fetch(\PDO::FETCH_ASSOC); $i++) { 
        $id=$row['id'];
        if($id){
    
        

    ?>
    <form action="">
        <table>
            <thead>
                <tr>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Description</th>
                    <th style="text-align:center;">Article</th>
                </tr>
            </thead>
            <tbody>
                <tr>       
                    <td style="text-align:center; word-break:break-all; width:300px;"><?php echo $row ['id']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:300px;"><?php echo $row ['short_description']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:300px;"><?php echo $row ['article']; ?></td>
                </tr>
            </tbody>
            
            
        </table>
    </form>
    <?php  }else
        {
            echo "<p class='echo'> 404 NOT FOUND </P>";
        }} 

    
    ?>
</body>
</html>