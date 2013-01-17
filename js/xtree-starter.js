
tree = null;

$(document).ready(function() {

tree = new WebFXLoadTree
(
    "Верхний Уровень</a>&nbsp;&nbsp;<img style=\"cursor:pointer;\" onClick=\"tree.reload();tree.expand();\" src=\"/img/icons/reload.png\">",
    "/tree-node-list.xml.php",
    "JavaScript:openNode('add', '0');",
    "classic",
    "/img/icons/desktop.png",
    "/img/icons/desktop.png"
);

$('#treeDiv').html(tree.toString());

});

webFXTreeConfig.rootIcon    = "/js/xtree/images/folder.png";
webFXTreeConfig.openRootIcon  = "/js/xtree/images/openfolder.png";
webFXTreeConfig.folderIcon    = "/js/xtree/images/folder.png";
webFXTreeConfig.openFolderIcon  = "/js/xtree/images/openfolder.png";
webFXTreeConfig.fileIcon    = "/js/xtree/images/file.png";
webFXTreeConfig.lMinusIcon    = "/js/xtree/images/Lminus.png";
webFXTreeConfig.lPlusIcon    = "/js/xtree/images/Lplus.png";
webFXTreeConfig.tMinusIcon    = "/js/xtree/images/Tminus.png";
webFXTreeConfig.tPlusIcon    = "/js/xtree/images/Tplus.png";
webFXTreeConfig.iIcon      = "/js/xtree/images/I.png";
webFXTreeConfig.lIcon      = "/js/xtree/images/L.png";
webFXTreeConfig.tIcon      = "/js/xtree/images/T.png";
webFXTreeConfig.blankIcon      = "/js/xtree/images/blank.png";

function openNode(action, nodeId)
{

    alert(action, nodeId);
    selectedNodeStyle(nodeId);
    return false;
}

function selectedNodeStyle(nodeId)
{
    if ($('#nodeanode_'+ nodeId).length)
    {
        $('.treenode').each
        (
            function ()
            {
                $(this).find('a').attr('class', 'treenodelink');
            }
        )

        $('#nodeanode_'+ nodeId).attr('class', 'webfx-tree-item-hover');

        return;
    }

    setTimeout("selectedNodeStyle("+ nodeId +")", 100);
}


function reload(id)
{
    if (id)
    {
        webFXTreeHandler.reload(id);
    }
    else
    {
        tree.reload();
    }
    selectedNodeStyle(id.replace(/.*_/g, ''));
}