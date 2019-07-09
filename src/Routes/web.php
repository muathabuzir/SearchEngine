<?php

Route::group([
    'namespace' => 'Mawdoo3\SearchResults\Controllers',
    'middleware' => ['web']
        ], function () {
    Route::get('searchResult', 'SearchResultController@index');
    Route::get('getResult', 'SearchResultController@getResult');
    Route::resources([
        'saved_results' => 'SavedResultsController'
    ]);
});


