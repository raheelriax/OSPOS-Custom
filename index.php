<?php
// PHP permanent URL redirection
header("Location: ".$_SERVER['REQUEST_URI']."/public/", true, 301);
exit();
?>
