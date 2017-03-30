<?php 
require __DIR__ . '/vendor/autoload.php';

$builder = new DI\ContainerBuilder();
$builder->addDefinitions('config.php');
$app = $builder->build();

app('GAME', $app->get('App\Game'));
app('PATHS', []);
app('GAME_SIZE', 9);
app('INIT_POS', [4,4]);

app('GAME')->init(app('GAME_SIZE'));
app('GAME')->moveShip(app('INIT_POS'));

app('GAME')->placeObstacles([
    [4,0],
    [7,2],
    [1,3],
    [6,5],
    [4,6],
    [0,8]
]);

app('GAME')->placePoint(-2, [1,0]);
app('GAME')->placePoint(-2, [5,1]);
app('GAME')->placePoint(-2, [2,2]);
app('GAME')->placePoint(-2, [7,3]);
app('GAME')->placePoint(-2, [0,4]);
app('GAME')->placePoint(-2, [7,4]);
app('GAME')->placePoint(-2, [3,5]);
app('GAME')->placePoint(-2, [0,7]);
app('GAME')->placePoint(-2, [4,7]);
app('GAME')->placePoint(-2, [8,8]);

app('GAME')->placePoint(-1, [2,0]);
app('GAME')->placePoint(-1, [7,0]);
app('GAME')->placePoint(-1, [4,1]);
app('GAME')->placePoint(-1, [5,2]);
app('GAME')->placePoint(-1, [0,3]);
app('GAME')->placePoint(-1, [3,3]);
app('GAME')->placePoint(-1, [5,4]);
app('GAME')->placePoint(-1, [8,5]);
app('GAME')->placePoint(-1, [2,6]);
app('GAME')->placePoint(-1, [7,6]);
app('GAME')->placePoint(-1, [5,7]);
app('GAME')->placePoint(-1, [3,8]);

app('GAME')->placePoint(1, [0,3]);
app('GAME')->placePoint(1, [0,5]);
app('GAME')->placePoint(1, [0,1]);
app('GAME')->placePoint(1, [6,1]);
app('GAME')->placePoint(1, [8,1]);
app('GAME')->placePoint(1, [3,2]);
app('GAME')->placePoint(1, [2,3]);
app('GAME')->placePoint(1, [5,3]);
app('GAME')->placePoint(1, [1,4]);
app('GAME')->placePoint(1, [3,4]);
app('GAME')->placePoint(1, [7,4]);
app('GAME')->placePoint(1, [5,5]);
app('GAME')->placePoint(1, [0,6]);
app('GAME')->placePoint(1, [3,6]);
app('GAME')->placePoint(1, [8,6]);
app('GAME')->placePoint(1, [2,7]);
app('GAME')->placePoint(1, [7,7]);
app('GAME')->placePoint(1, [1,8]);
app('GAME')->placePoint(1, [6,8]);

app('GAME')->placePoint(2, [6,0]);
app('GAME')->placePoint(2, [2,1]);
app('GAME')->placePoint(2, [0,2]);
app('GAME')->placePoint(2, [5,2]);
app('GAME')->placePoint(2, [8,2]);
app('GAME')->placePoint(2, [6,3]);
app('GAME')->placePoint(2, [1,5]);
app('GAME')->placePoint(2, [4,5]);
app('GAME')->placePoint(2, [7,5]);
app('GAME')->placePoint(2, [2,6]);
app('GAME')->placePoint(2, [6,6]);
app('GAME')->placePoint(2, [8,7]);
app('GAME')->placePoint(2, [2,8]);
app('GAME')->placePoint(2, [7,8]);

app('GAME')->placePoint(4, [8,0]);
app('GAME')->placePoint(4, [3,1]);
app('GAME')->placePoint(4, [1,2]);
app('GAME')->placePoint(4, [2,4]);
app('GAME')->placePoint(4, [6,4]);
app('GAME')->placePoint(4, [5,6]);
app('GAME')->placePoint(4, [1,7]);
app('GAME')->placePoint(4, [4,8]);
app('GAME')->placePoint(4, [6,8]);

app('PATHS', [ 
    [ [app('INIT_POS'),null] ] 
]);

app('App\Algo')->build();
$result = app('App\AlgoPoint')->calculate();

resultDump($result);