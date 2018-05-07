<?php
require 'conn.php';
$id = isset($_GET['id'])?$_GET['id']:1;
$user = isset($_GET['user'])?$_GET['user']:'admin';
preg_match(
        '/\`|"|\'|\\|\xA0|\x0B|0x0C|\t|\r|\n|\0|'.'=|<|@@|\|\||&&|#|'.'hex|sleep|benchmark|outfile|dumpfile|load_file|join|like|rlike/is',
            $id.','.$user)and die('Hacker!');
$sql = "select * from member where id='".intval($id)."'";
$res = mysql_query($sql);
if(!$res){
    die("404 not found!");
}
$row = mysql_fetch_array($res, MYSQL_ASSOC);
mysql_query("update `member` set view = view+1 where `id` ='{$id}' and `user`='{$user}'");
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$row['user']?>的成绩</title>
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>学生：<?=$row['user']?></h1>
                    <h3>成绩：<?=$row['score']?>分</h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>