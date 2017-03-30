<?php 

namespace App;

class TwoAndHalfMoves implements Contracts\Moves
{
    public function nne($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] + 2 ];
    }

    public function nnw($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] + 2 ];
    }

    public function enn($curPos)
    {
        return [ $curPos[0] + 1, $curPos[1] + 2 ];
    }

    public function wnn($curPos)
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

    public function nww($curPos)
    {
        return [ $curPos[0] - 2, $curPos[1] + 1 ];
    }

    public function sww($curPos)
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

    public function wss($curPos)
    {
        return [ $curPos[0] - 1, $curPos[1] - 2 ];
    }

    public function ess($curPos)
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

    public function see($curPos)
    {
        return [ $curPos[0] + 2, $curPos[1] - 1 ];
    }

    public function nee($curPos)
    {
        return [ $curPos[0] + 2, $curPos[1] + 1 ];
    }
}