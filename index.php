
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

