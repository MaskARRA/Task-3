
<?php
include 'db_conn.php';

$query = "SELECT * FROM news WHERE id=".$_GET['x']."";

$res = mysql_query($con, $query);
if($res && mysql_num_rows($res)>0){
while($row = mysql_fetch_assoc($res)){
echo $row['short_description'];
echo $row['article'];
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
    
</body>
</html>
