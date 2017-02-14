<?php

require_once('/usr/local/src/xhgui/external/header.php');

return phpinfo();

function d(int $i): string
{
    return sprintf("%d<br>",$i);
}

for($i=1;$i<100;$i++)
{
    $s = d($i);
    echo $s;
}