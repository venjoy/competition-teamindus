<?php 

function pathDump($path, $dd = true)
{
    $dump = '';
    foreach ($path as $node)
    {
        $dump .= $node[0][0] . ',' . $node[0][1] . '|' . $node[1];
        $dump .= "  ";
    }

    if ($dd) {
        !ddd($dump);
    }
    return $dump;
}

function pathsDump($paths, $dd = true)
{
    $dump = "\n --- PATHS --- \n";
    foreach ($paths as $path)
    {
        $dump .= pathDump($path, false);
        $dump .= "\n";
    }

    $dump .= "\n --- TOTAL --- \n";
    $dump .= count($paths);
    

    if ($dd) {
        !ddd($dump);
    }
    return $dump;
}