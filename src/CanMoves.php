<?php 

namespace App;

class CanMoves
{
    public function __construct(Contracts\Moves $moves)
    {
        $this->moves = $moves;
    }

    public function get($path)
    {
        if (!count($path)) return [];

        $curPos = end($path)[0];

        $totalOptions = get_class_methods($this->moves);

        $canMoveOptions = [];

        foreach ($totalOptions as $option)
        {
            $finalPos = $this->moves->$option($curPos);
            
            if ($this->canMove($path, $finalPos))
            {
                $canMoveOptions[] = [$finalPos, $option];
            }
        }

        return $canMoveOptions;
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
}