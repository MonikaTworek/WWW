<?php
require_once(__DIR__."/main.php");
$lol=new MyPage("Main", "greeting", "Cześć!");
echo $lol->Begin();
echo $lol->End();
?>