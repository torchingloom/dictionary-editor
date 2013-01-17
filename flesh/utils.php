<?php

function printr($array = array())
{
    if (isset($_SERVER['HTTP_HOST']) && empty($_SERVER['argv']))
    {
        echo('<PRE style="color: green; background-color: silver; font-size: 10px; font-family: verdana; font-weight: bold; padding: 4px; position: pabsolute; z-index: 1000">');
        print_r($array);
        echo('</PRE>');
        return;
    }
    echo "\n\n";
    print_r($array);
    echo "\n\n";
    return;
}
