<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Message;

$router->get('/', function () use ($router) {
    return $router->app->version() ;
});


$router->post('/messages',['uses'=>'MessageController@create']);
$router->get('/messages',['uses'=>'MessageController@showAllMessages']);


//$router->get('/messages', function () use ($router) {
//    return app('db')->select("SELECT * FROM messages");
//});
//
//
//$router->post('/messages', function ($message) use ($router) {
//    return $message;
////    return app('db')->update("INSERT INTO MESSAGES(user_id,message) values (?,?)",$message);
//});

$router->get('users', function () {
    $results = app('db')->select("SELECT * FROM users");
    return $results;
});
