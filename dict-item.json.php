<?php
include_once 'flesh/__starter.php';
header("Content-Type: application/json; charset=UTF-8");
$dict = new Dict($_REQUEST['dict']);
echo json_encode($dict->getItem($_REQUEST['id'])->toArray());
