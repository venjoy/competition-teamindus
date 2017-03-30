<?php 

namespace App;

class Game
{
    public $data;

    public $shipPos;

    public function init($size)
    {
        for ($i = 0; $i < $size; $i++)
        {
            for ($j = 0; $j < $size; $j++)
            {
                $this->data[$i][$j] = 0;
            }
        }
    }

    public function moveShip($pos)
    {
        $this->shipPos = $pos;
        $this->data[$pos[0]][$pos[1]] = 's';
    }

    public function placeObstacles($positions)
    {
        foreach ($positions as $pos)
        {
            $this->data[$pos[0]][$pos[1]] = 'x';
        }
    }

    public function isObstacle($pos)
    {
        return $this->data[$pos[0]][$pos[1]] === 'x';
    }

    public function placePoint($point, $pos)
    {
        $this->data[$pos[0]][$pos[1]] = $point;
    }

    public function positionPoint($pos)
    {
        $point = $this->data[$pos[0]][$pos[1]];

        if ($point == 'x' || $point == 's')
        {
            $point = 0;
        }

        return $point;
    }
}