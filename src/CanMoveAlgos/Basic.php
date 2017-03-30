<?php 

namespace App\CanMoveAlgos;

use App\Contracts\CanMoveAlgo;

class Basic implements CanMoveAlgo
{
    public function pathCordinates($path)
    {
        return array_map(function($node){
            return $node[0];
        }, $path);
    }

    public function isPathComplete($path)
    {
        $count = 0;
        foreach ($path as $node)
        {
            if ($node[0] == app('INIT_POS'))
            {
                $count++;
            }
        }

        return $count >= 2;
    }

    public function canMove($path, $finalPos)
    {
        // path completed
        if ($this->isPathComplete($path)) 
            return false;

        // path is being completed
        // it will be neglected in next iteration
        if ($finalPos == app('INIT_POS'))
            return true;

        // check repeted values except INIT_POS
        if (in_array($finalPos, $this->pathCordinates($path)))
            return false;

        // out of range condition
        if (
            $finalPos[0] < 0 ||
            $finalPos[1] < 0 ||
            $finalPos[0] >= app('GAME_SIZE') ||
            $finalPos[1] >= app('GAME_SIZE') 
        )
            return false;

        // obstacles
        if (app('GAME')->isObstacle($finalPos)) {
            return false;
        }
        
        // true otherwise
        return true;
    }
}