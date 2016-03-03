<?php

Route::group(['prefix' => 'forum', 'namespace' => '$MODULE_NAMESPACE$\Forum\Http\Controllers'], function()
{
	Route::get('/', 'ForumController@index');
});