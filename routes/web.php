<?php

use Illuminate\Support\Facades\Route;

/*
    Todas as URLs passam por esse script que tem como objetivo instanciar rotas para responderem
    a requisições HTTP para o servidor.

    Route::<método>(<url>, <controller@método>)->name(<nome>)
        * método: Método HTTP (GET, HEAD, POST, PUT, DELETE, PATCH, ...)
        * url: URL que causará a excecução da rota
        * controller@método: Método de um Controlador responsável por lidar com a requisição
        * ->name(<nome>): Método para atribuir um nome customizado à rota
    
    Route::group(): Responsável por agrupar rotas seguindo alguns critérios.
    Nesse caso, o agrupamento é feito por prefixo de URL, ou seja, todas as
    URL que possuam um prefixo específico são tratadas por rotas que estejam dentro
    de um grupo que atenda ao prefixo específico
*/

// Agrupando as rotas por um prefixo na URL

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'HomeController@index')->name('index');

    // /equipamentos
    Route::group(['prefix' => 'equipamentos'], function () {
        Route::get('/', 'EquipmentController@index')->name('equipments.index');
        Route::get('/cadastrar', 'EquipmentController@create')->name('equipments.create');
        Route::get('/{id}', 'EquipmentController@getEquipment')->name('equipments.getEquipment');
        Route::post('/', 'EquipmentController@store')->name('equipments.store');
        Route::put('/{id}', 'EquipmentController@update')->name('equipments.update');
        Route::delete('/{id}', 'EquipmentController@destroy')->name('equipments.destroy');

        Route::get('/filtrar/1/{psgrs}/{type}', 'EquipmentController@filter1')->name('equipments.filter1');
        Route::get('/filtrar/2/{name}/{type}', 'EquipmentController@filter2')->name('equipments.filter2');
    });

    // /aeronaves
    Route::group(['prefix' => '/aeronaves'], function () {
        Route::get('/', 'AirshipController@index')->name('airships.index');
        Route::get('/cadastrar', 'AirshipController@create')->name('airships.create');
        Route::get('/{id}', 'AirshipController@getAirship')->name('airships.getAirship');
        Route::post('/', 'AirshipController@store')->name('airships.store');
        Route::put('/{id}', 'AirshipController@update')->name('airships.update');
        Route::delete('/{id}', 'AirshipController@destroy')->name('airships.destroy');
    });

    // /companhias-aereas
    Route::group(['prefix' => 'companhias-aereas'], function () {
        Route::get('/', 'AirlineController@index')->name('airlines.index');
        Route::get('/cadastrar', 'AirlineController@create')->name('airlines.create');
        Route::get('/{id}', 'AirlineController@getAirline')->name('airlines.getAirline');
        Route::post('/', 'AirlineController@store')->name('airlines.store');
        Route::put('/{id}', 'AirlineController@update')->name('airlines.update');
        Route::delete('/{id}', 'AirlineController@destroy')->name('airlines.destroy');

        Route::get('/filtrar/{type}', 'AirlineController@filter')->name('airlines.filter');
    });

    // /voos
    Route::group(['prefix' => 'voos'], function () {
        Route::get('/', 'FlightController@index')->name('flights.index');
        Route::get('/cadastrar', 'FlightController@create')->name('flights.create');
        Route::get('/{id}', 'FlightController@getFlight')->name('flights.getFlight');
        Route::post('/', 'FlightController@store')->name('flights.store');
        Route::put('/{id}', 'FlightController@update')->name('flights.update');
        Route::delete('/{id}', 'FlightController@destroy')->name('flights.destroy');

        Route::get('/filtrar/{from}/{to}', 'FlightController@filter')->name('flights.filter');
    });
    
    // /passageiros
    Route::group(['prefix' => 'passageiros'], function () {
        Route::get('/', 'PassengerController@index')->name('passengers.index');
        Route::get('/cadastrar', 'PassengerController@create')->name('passengers.create');
        Route::get('/{id}', 'PassengerController@getPassenger')->name('passengers.getPassenger');
        Route::post('/', 'PassengerController@store')->name('passengers.store');
        Route::put('/{id}', 'PassengerController@update')->name('passengers.update');
        Route::delete('/{id}', 'PassengerController@destroy')->name('passengers.destroy');

        Route::get('/filtrar/{civil}/{sex}', 'PassengerController@filter')->name('passengers.filter');
    });

    // /paises
    Route::group(['prefix' => 'paises'], function () {
        Route::get('/', 'CountryController@index')->name('countries.index');
        Route::get('/cadastrar', 'CountryController@create')->name('countries.create');
        Route::get('/{id}', 'CountryController@getCountry')->name('countries.getCountry');
        Route::post('/', 'CountryController@store')->name('countries.store');
        Route::put('/{id}', 'CountryController@update')->name('countries.update');
        Route::delete('/{id}', 'CountryController@destroy')->name('countries.destroy');
    });

    // /rotas-de-voo
    Route::group(['prefix' => 'rotas-de-voo'], function () {
        Route::get('/', 'FlightRouteController@index')->name('flightroutes.index');
        Route::get('/cadastrar', 'FlightRouteController@create')->name('flightroutes.create');
        Route::get('/{id}', 'FlightRouteController@getFlightRoute')->name('flightroutes.getFlightRoute');
        Route::post('/', 'FlightRouteController@store')->name('flightroutes.store');
        Route::put('/{id}', 'FlightRouteController@update')->name('flightroutes.update');
        Route::delete('/{id}', 'FlightRouteController@destroy')->name('flightroutes.destroy');

        Route::get('/filtrar/{tipo}', 'FlightRouteController@filter')->name('flightroutes.filter');
    });

    // /reservas
    Route::group(['prefix' => 'reservas'], function () {
        Route::get('/', 'ReserveController@index')->name('reserves.index');
        Route::get('/cadastrar', 'ReserveController@create')->name('reserves.create');
        Route::get('/{id}', 'ReserveController@getReserve')->name('reserves.getReserve');
        Route::post('/', 'ReserveController@store')->name('reserves.store');
        Route::put('/{id}', 'ReserveController@update')->name('reserves.update');
        Route::delete('/{id}', 'ReserveController@destroy')->name('reserves.destroy');

        Route::get('/filtrar/{min}/{max}', 'ReserveController@filter')->name('reserves.filter');
    });

    // /aeroportos
    Route::group(['prefix' => 'aeroportos'], function () {
        Route::get('/', 'AirportController@index')->name('airports.index');
        Route::get('/cadastrar', 'AirportController@create')->name('airports.create');
        Route::get('/{id}', 'AirportController@getAirport')->name('airports.getAirport');
        Route::post('/', 'AirportController@store')->name('airports.store');
        Route::put('/{id}', 'AirportController@update')->name('airports.update');
        Route::delete('/{id}', 'AirportController@destroy')->name('airports.destroy');
    });

    // /estados
    Route::group(['prefix' => 'estados'], function () {
        Route::get('/', 'StateController@index')->name('states.index');
        Route::get('/cadastrar', 'StateController@create')->name('states.create');
        Route::get('/{id}', 'StateController@getState')->name('states.getState');
        Route::post('/', 'StateController@store')->name('states.store');
        Route::put('/{id}', 'StateController@update')->name('states.update');
        Route::delete('/{id}', 'StateController@destroy')->name('states.destroy');
    });
});
