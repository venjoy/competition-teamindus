<?php 

namespace App;

class CanMoves
{
    public function __construct(Contracts\Moves $moves, Contracts\CanMoveAlgo $canMoveAlgo)
    {
        $this->moves = $moves;
        $this->canMoveAlgo = $canMoveAlgo;
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
            
            if ($this->canMoveAlgo->canMove($path, $finalPos))
            {
                $canMoveOptions[] = [$finalPos, $option];
            }
        }

        return $canMoveOptions;
    }
}