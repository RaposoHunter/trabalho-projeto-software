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

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate')->name('authenticate');
Route::post('/cadastrar', 'Auth\LoginController@register')->name('register');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'HomeController@index')->name('index');

    Route::group(['prefix' => 'equipamentos'], function () {
        Route::get('/', 'EquipmentController@index')->name('equipments.index');
        Route::get('/cadastrar', 'EquipmentController@create')->name('equipments.create');
        Route::get('/{id}', 'EquipmentController@getEquipment')->name('equipments.getEquipment');
        Route::post('/{id}', 'EquipmentController@store')->name('equipments.store');
        Route::put('/{id}', 'EquipmentController@update')->name('equipments.update');
        Route::delete('/{id}', 'EquipmentController@destroy')->name('equipments.destroy');
    });

    Route::group(['prefix' => '/aeronaves'], function () {
        Route::get('/', 'AirshipController@index')->name('airships.index');
        Route::get('/cadastrar', 'AirshipController@create')->name('airships.create');
        Route::get('/{id}', 'AirshipController@getAirship')->name('airships.getAirship');
        Route::post('/{id}', 'AirshipController@store')->name('airships.store');
        Route::put('/{id}', 'AirshipController@update')->name('airships.update');
        Route::delete('/{id}', 'AirshipController@destroy')->name('airships.destroy');
    });

    Route::group(['prefix' => 'companhias-aereas'], function () {
        Route::get('/', 'AirlineController@index')->name('airlines.index');
        Route::get('/cadastrar', 'AirlineController@create')->name('airlines.create');
        Route::get('/{id}', 'AirlineController@getAirline')->name('airlines.getAirline');
        Route::post('/{id}', 'AirlineController@store')->name('airlines.store');
        Route::put('/{id}', 'AirlineController@update')->name('airlines.update');
        Route::delete('/{id}', 'AirlineController@destroy')->name('airlines.destroy');
    });

    Route::group(['prefix' => 'voos'], function () {
        Route::get('/', 'FlightController@index')->name('flights.index');
        Route::get('/cadastrar', 'FlightController@create')->name('flights.create');
        Route::get('/{id}', 'FlightController@getFlight')->name('flights.getFlight');
        Route::post('/{id}', 'FlightController@store')->name('flights.store');
        Route::put('/{id}', 'FlightController@update')->name('flights.update');
        Route::delete('/{id}', 'FlightController@destroy')->name('flights.destroy');
    });

    Route::group(['prefix' => 'passageiros'], function () {
        Route::get('/', 'PassengerController@index')->name('passengers.index');
        Route::get('/cadastrar', 'PassengerController@create')->name('passengers.create');
        Route::get('/{id}', 'PassengerController@getPassenger')->name('passengers.getPassenger');
        Route::post('/{id}', 'PassengerController@store')->name('passengers.store');
        Route::put('/{id}', 'PassengerController@update')->name('passengers.update');
        Route::delete('/{id}', 'PassengerController@destroy')->name('passengers.destroy');
    });

    Route::group(['prefix' => 'paises'], function () {
        Route::get('/', 'CountryController@index')->name('countries.index');
        Route::get('/cadastrar', 'CountryController@create')->name('countries.create');
        Route::get('/{id}', 'CountryController@getCountry')->name('countries.getCountry');
        Route::post('/{id}', 'CountryController@store')->name('countries.store');
        Route::put('/{id}', 'CountryController@update')->name('countries.update');
        Route::delete('/{id}', 'CountryController@destroy')->name('countries.destroy');
    });

    Route::group(['prefix' => 'rotas-de-voo'], function () {
        Route::get('/', 'FlightRouteController@index')->name('flightroutes.index');
        Route::get('/cadastrar', 'FlightRouteController@create')->name('flightroutes.create');
        Route::get('/{id}', 'FlightRouteController@getFlightRoute')->name('flightroutes.getFlightRoute');
        Route::post('/{id}', 'FlightRouteController@store')->name('flightroutes.store');
        Route::put('/{id}', 'FlightRouteController@update')->name('flightroutes.update');
        Route::delete('/{id}', 'FlightRouteController@destroy')->name('flightroutes.destroy');
    });

    Route::group(['prefix' => 'reservas'], function () {
        Route::get('/', 'ReserveController@index')->name('reserves.index');
        Route::get('/cadastrar', 'ReserveController@create')->name('reserves.create');
        Route::get('/{id}', 'ReserveController@getReserve')->name('reserves.getReserve');
        Route::post('/{id}', 'ReserveController@store')->name('reserves.store');
        Route::put('/{id}', 'ReserveController@update')->name('reserves.update');
        Route::delete('/{id}', 'ReserveController@destroy')->name('reserves.destroy');
    });

    Route::group(['prefix' => 'aeroportos'], function () {
        Route::get('/', 'AirportController@index')->name('airports.index');
        Route::get('/cadastrar', 'AirportController@create')->name('airports.create');
        Route::get('/{id}', 'AirportController@getAirport')->name('airports.getAirport');
        Route::post('/{id}', 'AirportController@store')->name('airports.store');
        Route::put('/{id}', 'AirportController@update')->name('airports.update');
        Route::delete('/{id}', 'AirportController@destroy')->name('airports.destroy');
    });

    Route::group(['prefix' => 'estados'], function () {
        Route::get('/', 'StateController@index')->name('states.index');
        Route::get('/cadastrar', 'StateController@create')->name('states.create');
        Route::get('/{id}', 'StateController@getState')->name('states.getState');
        Route::post('/{id}', 'StateController@store')->name('states.store');
        Route::put('/{id}', 'StateController@update')->name('states.update');
        Route::delete('/{id}', 'StateController@destroy')->name('states.destroy');
    });
});
