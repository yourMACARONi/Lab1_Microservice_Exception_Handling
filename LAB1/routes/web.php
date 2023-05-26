<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
$router->get('/users',['uses' => 'TeacherController@get']);

});
$router->get('/users', 'TeacherController@get'); // INSERT NEW RECORD
$router->delete('/dusers/{id}', 'TeacherController@deleteTeacher'); // DELETE teacher RECORD BY teacher
$router->put('/uusers/{id}', 'TeacherController@updateUserInfo  '); // UPDATE teacher RECORD BY teacher
$router->get('/gusers/{id}', 'TeacherController@getTeacher'); // SEARCH teacher BY teacher
$router->get('/gusers', 'TeacherController@getallTeacher'); // VIEW ALL teachers RECORDS