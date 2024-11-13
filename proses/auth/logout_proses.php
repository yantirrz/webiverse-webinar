<?php
// codingan ahmad rai fatkaozi
session_start();
session_unset();
session_destroy();
header("Location: ../../index.php");
exit()
?>
