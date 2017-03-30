<?php 

namespace App;

class AlgoPoint
{
    public function calculate()
    {
        $highestPoints = 0;
        $highestPath = [];
        foreach (app('PATHS') as $path)
        {
            $points = $this->pathPoints($path);

            if ($points > $highestPoints) 
            {
                $highestPoints = $points;
                $highestPath = $path;
            }
        }

        return [$highestPoints, $highestPath];
    }

    public function pathPoints($path)
    {
        $points = 0;
        $prevNode = null;
        foreach ($path as $node)
        {
            $points += $this->movePoints($prevNode, $node);
            $prevNode = $node;
        }

        return $points;
    }

    public function movePoints($prevNode, $node)
    {
        if ($prevNode == null) return 0;

        $pos = $prevNode[0];
        $move = $node[1];

        $points = 0;
        for ($i = 0; $i < strlen($move); $i++)
        {
            $m = $move[$i];
            if ($m === 'n')
            {
                $pos[1]++;
                $points += app('GAME')->positionPoint($pos);
            }
        }
        
        return $points;
    }
}