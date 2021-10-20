<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Airship;
use App\Reserve;
use App\Passenger;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home_statistics = $this->getHomeStatistics();

        return view('home', $home_statistics);
    }

    public function getHomeStatistics()
    {
        $passenger_count = Passenger::count();
        $flight_count = Flight::count();
        $airship_count = Airship::count();
        $reserve_count = Reserve::count();

        // Parece que todas as reservas são de 1993
        // $reserve_count = Reserve::whereDate('DT_SAIDA_VOO', '>=', now()->startOfDay()->format('Y-m-d'))->count();

        return [
            'passenger_count' => $passenger_count,
            'flight_count' => $flight_count,
            'airship_count' => $airship_count,
            'reserve_count' => $reserve_count,
        ];
    }
}
