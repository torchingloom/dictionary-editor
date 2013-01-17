<?php
include_once 'flesh/__starter.php';

header("Content-Type: text/xml; charset=UTF-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';

$items = array();
$parentId = @$_REQUEST['pid'] ?: null;
if (!$parentId)
{
    $items = Config::get("dict-tree");
}
else
{
    if ($map = Config::get("dict-tree-map/{$parentId}"))
    {

    }
    else
    {
        $items = Config::get("dict-tree/{$parentId}/childs");
    }
}

echo '<tree>';
foreach ($items AS $id => $item)
{
    $icon = @$item['icon'] ?: Config::get('tree-default-icon/'. (!empty($item['childs']) ? 'dir' : 'node'));
    echo '
<tree
    text="'. $item['title'] .'"
    id="'. $id .'"
    icon="'. $icon .'"
    openIcon="'. $icon .'"';
    if (!empty($item['childs']))
    {
        echo '    src="/tree-node-list.xml.php?pid='. $id .'"';
    }
    if (@$item['type'] == 'dict')
    {
        echo '    action="#'. $item['dict'] .'"';
    }
    echo '
/>';
}
echo '
</tree>';
