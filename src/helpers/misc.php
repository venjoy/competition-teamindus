<?php 

function resultDump($result, $pathDump = true)
{
    $dump = '';

    if ($pathDump)
        $dump .= pathsDump(app('PATHS'), false);

    $dump .= "\n\n --- Highest Path --- \n";
    $dump .= pathDump($result[1], false);

    $dump .= "\n\n --- Highest Value --- \n";
    $dump .= $result[0];

    !ddd($dump);
}