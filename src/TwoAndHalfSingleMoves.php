<?php 

namespace App;

class TwoAndHalfSingleMoves implements Contracts\Moves
{
    public function nne($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] + 2 ];
    }

    public function nnw($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] + 2 ];
    }

    public function wwn($curPos)
    {
        return [ $curPos[0] - 2, $curPos[1] + 1 ];
    }

    public function wws($curPos)
    {
        return [ $curPos[0] - 2, $curPos[1] - 1 ];
    }

    public function ssw($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] - 2 ];
    }

    public function sse($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] - 2 ];
    }

    public function ees($curPos)
    {
        return [ $curPos[0] + 2, $curPos[1] - 1 ];
    }

    public function een($curPos)
    {
        return [ $curPos[0] + 2, $curPos[1] + 1 ];
    }
}