<?php 

namespace App\CanMoveAlgos;

use App\Contracts\CanMoveAlgo;

class NegativeRemoved extends Basic
{
    public function canMove($path, $finalPos)
    {
        $parentResult = parent::canMove($path, $finalPos);

        // negative point
        if ($parentResult && app('GAME')->isNegativePoint($finalPos)) {
            return false;
        }        

        return $parentResult;
    }    
}