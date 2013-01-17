<?php
include_once 'flesh/__starter.php';
//header("Content-Type: application/json; charset=UTF-8");
$dict = new Dict($_REQUEST['dict']);
$items = array();
foreach ($dict->getItemList(@$_REQUEST['count'], @$_REQUEST['from']) AS $item)
{
    if (@$_REQUEST['chosen'] && !$item->matchChosenValue($_REQUEST['chosen']))
    {
        continue;
    }
    $items[] = $item->toArray();
}
echo json_encode($items);
