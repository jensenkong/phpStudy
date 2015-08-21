<!--<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>-->


<?php
/**
 * Created by PhpStorm.
 * User: Jensenkong
 * Date: 2015/8/11
 * Time: 13:27
 */



$connet = @mysql_connect('localhost','root','');
if($connet){
    mysql_select_db('testMyself',$connet);

    $result = mysql_query( 'SELECT * FROM books');
    $count = mysql_num_rows($result);

    for($i=0;$i<$count;$i++) {
        print_r(mysql_fetch_assoc($result));

    }
    echo $count;
}else{
    echo '无法连接数据库';
}

?>
<!--</body>
</html>-->