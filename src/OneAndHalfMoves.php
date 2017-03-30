<?php 

namespace App;

class OneAndHalfMoves implements Contracts\Moves
{
    public function ne($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] + 1 ];
    }

    public function nw($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] + 1 ];
    }

    public function wn($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] + 1 ];
    }

    public function ws($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] - 1 ];
    }

    public function sw($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] - 1 ];
    }

    public function se($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] - 1 ];
    }

    public function es($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] - 1 ];
    }

    public function en($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] + 1 ];
    }
}