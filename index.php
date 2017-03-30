<?php 
require __DIR__ . '/vendor/autoload.php';

$builder = new DI\ContainerBuilder();
$builder->addDefinitions('config.php');
$app = $builder->build();

app('GAME', $app->get('App\Game'));
app('PATHS', []);
app('GAME_SIZE', 4);
app('INIT_POS', [1,1]);

app('GAME')->init(app('GAME_SIZE'));
app('GAME')->moveShip(app('INIT_POS'));

app('GAME')->placeObstacles([
    [2,3], [0,0], [2,0], [0,2], [0,1]
]);

app('GAME')->placePoint(1, [1,2]);
app('GAME')->placePoint(1, [1,3]);
app('GAME')->placePoint(-2, [1,3]);

app('PATHS', [ 
    [ [app('INIT_POS'),null] ] 
]);

app('App\Algo')->build();
$result = app('App\AlgoPoint')->calculate();

resultDump($result);