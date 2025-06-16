<?php
exec('sudo /home/www-data/script_relance_messagerie.sh');
header('Location: http://192.168.1.39/index.php');
exit(); 
?>
