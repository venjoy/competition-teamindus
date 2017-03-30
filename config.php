<?php 

return [
    'App\Contracts\Moves' => DI\object('App\TwoAndHalfMoves'),
    'App\Contracts\CanMoveAlgo' => DI\object('App\CanMoveAlgos\NegativeRemoved'),
];