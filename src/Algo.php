<?php 
namespace App;

class Algo
{
    public function build()
    {
        $this->buildPaths();
        $this->completedPaths();
    }

    public function buildPaths()
    {
        $temp = [];

        foreach (app('PATHS') as $path)
        {
            $newPaths = $this->pathsFromPath($path);
            $temp = array_merge($temp, $newPaths);
        }

        if (count($temp)) 
        {
            app('PATHS', $temp);
            $this->buildPaths();
        }
    }

    public function pathsFromPath($path)
    {
        $paths = [];

        $options = app('App\CanMoves')->get($path);

        foreach ($options as $option)
        {
            $newPath = $path;
            array_push($newPath, $option);
            $paths[] = $newPath;
        }

        return $paths;
    }

    public function completedPaths()
    {
        $completedPaths = [];
        foreach (app('PATHS') as $path)
        {
            if ( count($path) && end($path)[0] == app('INIT_POS') )
            {
                $completedPaths[] = $path;
            }
        }
        app('PATHS', $completedPaths);
    }
}