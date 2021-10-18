<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/seed', function () {
    $model_array = \App\Reserve::all()->toArray();

    foreach($model_array as $model_instance) {
        echo('Reserve::create([<br>');
        
        foreach($model_instance as $column_name => $column_value) {
            if(is_null($column_value)) {
                echo("&nbsp;&nbsp;&nbsp;&nbsp;'{$column_name}' => null,<br>");
            } else if(gettype($column_value) == 'string') {
                echo("&nbsp;&nbsp;&nbsp;&nbsp;'{$column_name}' => '{$column_value}',<br>");
            } else {
                echo("&nbsp;&nbsp;&nbsp;&nbsp;'{$column_name}' => {$column_value},<br>");
            }
        }

        echo(']);<br><br>');
    }
});*/

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'HomeController@main');

    Route::middleware(['ajax'])->group(function () {
        Route::get('/home', 'HomeController@home');

        Route::group(['prefix' => 'equipamentos'], function () {
            Route::get('/', 'EquipmentController@index');
            Route::get('/{id}', 'EquipmentController@getEquipment');
            Route::post('/{id}', 'EquipmentController@store');
            Route::put('/{id}', 'EquipmentController@update');
            Route::delete('/{id}', 'EquipmentController@destroy');
        });

        Route::group(['prefix' => '/aeronaves'], function () {
            Route::get('/', 'AirshipController@index');
            Route::get('/{id}', 'AirshipController@getAirship');
            Route::post('/{id}', 'AirshipController@store');
            Route::put('/{id}', 'AirshipController@update');
            Route::delete('/{id}', 'AirshipController@destroy');
        });

        Route::group(['prefix' => 'companhias-aereas'], function () {
            Route::get('/', 'AirlineController@index');
            Route::get('/{id}', 'AirlineController@getAirline');
            Route::post('/{id}', 'AirlineController@store');
            Route::put('/{id}', 'AirlineController@update');
            Route::delete('/{id}', 'AirlineController@destroy');
        });

        Route::group(['prefix' => 'voos'], function () {
            Route::get('/', 'FlightController@index');
            Route::get('/{id}', 'FlightController@getFlight');
            Route::post('/{id}', 'FlightController@store');
            Route::put('/{id}', 'FlightController@update');
            Route::delete('/{id}', 'FlightController@destroy');
        });

        Route::group(['prefix' => 'passageiros'], function () {
            Route::get('/', 'PassengerController@index');
            Route::get('/{id}', 'PassengerController@getPassenger');
            Route::post('/{id}', 'PassengerController@store');
            Route::put('/{id}', 'PassengerController@update');
            Route::delete('/{id}', 'PassengerController@destroy');
        });

        Route::group(['prefix' => 'paises'], function () {
            Route::get('/', 'CountryController@index');
            Route::get('/{id}', 'CountryController@getCountry');
            Route::post('/{id}', 'CountryController@store');
            Route::put('/{id}', 'CountryController@update');
            Route::delete('/{id}', 'CountryController@destroy');
        });

        Route::group(['prefix' => 'rotas-de-voo'], function () {
            Route::get('/', 'FlightRouteController@index');
            Route::get('/{id}', 'FlightRouteController@getFlightRoute');
            Route::post('/{id}', 'FlightRouteController@store');
            Route::put('/{id}', 'FlightRouteController@update');
            Route::delete('/{id}', 'FlightRouteController@destroy');
        });

        Route::group(['prefix' => 'reservas'], function () {
            Route::get('/', 'ReserveController@index');
            Route::get('/{id}', 'ReserveController@getReserve');
            Route::post('/{id}', 'ReserveController@store');
            Route::put('/{id}', 'ReserveController@update');
            Route::delete('/{id}', 'ReserveController@destroy');
        });

        Route::group(['prefix' => 'aeroportos'], function () {
            Route::get('/', 'AirportController@index');
            Route::get('/{id}', 'AirportController@getAirport');
            Route::post('/{id}', 'AirportController@store');
            Route::put('/{id}', 'AirportController@update');
            Route::delete('/{id}', 'AirportController@destroy');
        });

        Route::group(['prefix' => 'estados'], function () {
            Route::get('/', 'StateController@index');
            Route::get('/{id}', 'StateController@getState');
            Route::post('/{id}', 'StateController@store');
            Route::put('/{id}', 'StateController@update');
            Route::delete('/{id}', 'StateController@destroy');
        });
    });
});
