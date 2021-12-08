<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Airship;
use App\Reserve;
use App\Passenger;
use App\Airline;
use App\Country;
use App\State;
use App\Equipment;
use App\FlightRoute;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Controller responsável por gerir as requisições para o HomePage

    public function index()
    {
        $home_statistics = $this->getHomeStatistics();

        return view('home', $home_statistics);
    }

    // Método que encapsula a lógica para obtenção dos dados estatísticos de cada tabela
    private function getHomeStatistics()
    {
        $passenger_count = Passenger::count();
        $flight_count = Flight::count();
        $airship_count = Airship::count();
        $reserve_count = Reserve::count();
        $airline_count = Airline::count();
        $country_count = Country::count();
        $state_count = State::count();
        $equipament_count = Equipment::count();
        $flightRoute_count = FlightRoute::count();

        return [
            'passenger_count' => $passenger_count,
            'flight_count' => $flight_count,
            'airship_count' => $airship_count,
            'reserve_count' => $reserve_count,
            'airline_count' => $airline_count,
            'country_count' => $country_count,
            'state_count' => $state_count,
            'equipament_count' => $equipament_count,
            'flightRoute_count' => $flightRoute_count,
        ];
    }
}
