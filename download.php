<?php

$fn = $_REQUEST['fn'];
//echo $fn;
header("Content-Disposition: attachment; filename=$fn");
readfile("material\\$fn");


?>

