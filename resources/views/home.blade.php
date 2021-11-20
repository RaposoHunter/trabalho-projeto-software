@extends('layouts.main')

@section('title', 'Home')


@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Home</h1>
        <div class="general-statistics">
            <h2 class="sub-title">Estátisticas Gerais</h2>
            <div class="box-containers">
                <div class="statistics-box">
                    <h3>Nº de Passageiros</h3>
                    <h2>{{ $passenger_count }}</h2>
                </div>
                <div class="statistics-box">
                    <h3>Nº de Voos</h3>
                    <h2>{{ $flight_count }}</h2>
                </div>
                <div class="statistics-box">
                    <h3>Nº de Aeronaves</h3>
                    <h2>{{ $airship_count }}</h2>
                </div>
                <div class="statistics-box">
                    <h3>Reservas</h3>
                    <h2>{{ $reserve_count }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="sub-title">Acesso Rápido</h2>
                <div class="main-card">
                    <ul>
                        <li>
                            <a href="{{route('passengers.create')}}">
                                <span class="link-text">Cadastrar Passageiro</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('flights.create')}}">
                                <span class="link-text">Cadastrar Voo</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('airports.create')}}">
                                <span class="link-text">Cadastrar Aeroporto</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('airlines.create')}}" class="fast-link">
                                <span class="link-text">Cadastrar Companhia Aérea</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('equipments.create')}}" class="fast-link">

                                <span class="link-text">Cadastrar Equipamento</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="sub-title">Outras Estátisticas</h2>
                <div class="main-card">
                    <ul>
                        <li class="second-li">
                            <span class="link-text">N° de Companhias Aéreas</span>
                            <span class="link-number">{{$airline_count}}</span>
                        </li>
                        <li class="second-li">
                            <span class="link-text">N° de Países</span>
                            <span class="link-number">{{$country_count}}</span>
                        </li>
                        <li class="second-li">
                            <span class="link-text">N° de UFs</span>
                            <span class="link-number">{{$state_count}}</span>
                        </li>
                        <li class="second-li">
                            <span class="link-text">N° de Equipamentos</span>
                            <span class="link-number">{{$equipament_count}}</span>
                        </li>
                        <li class="second-li">
                            <span class="link-text">N° de Rotas de Voos</span>
                            <span class="link-number">{{$flightRoute_count}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')

@endpush
