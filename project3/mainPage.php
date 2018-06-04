<?php
require_once(__DIR__."/main.php");
$lol=new MyPage("Main", "greeting", "Cześć!");
echo $lol->Begin();
echo $lol->End();
require_once(__DIR__."/databases.php");
$date=new databases();
$r=$date->read(1);
echo $r[0]["text"];
?>