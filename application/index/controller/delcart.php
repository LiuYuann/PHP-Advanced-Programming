<?php
include "../function/functionsPDO.php";
$gid = $_GET['gid'];
$mid = $_GET['mid'];
$msg=delCartgoods($mid,$gid);
echo json_encode($msg);   
?>