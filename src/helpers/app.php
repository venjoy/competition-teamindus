<?php 

function app(string $key = '', $setValue = null)
{
    global $app;

    if ($setValue !== null) 
    {
        $app->set($key, $setValue);
        return true;
    }

    return $key ? $app->get($key) : $app;
}