@extends('layouts.main')

@push('title')
    Home
@endpush

@push('css')
    
@endpush

@section('container')    
    <h1>Home Page</h1>
    <table>
        <thead>
            <tr>
                <th>Nº de Passageiros</th>
                <th>Nº de Voos</th>
                <th>Nº de Aeronaves</th>
                <th>Reservas</th>
            </tr>
        </thead>
        <tbody>
            <td>{{ $passenger_count }}</td>
            <td>{{ $flight_count }}</td>
            <td>{{ $airship_count }}</td>
            <td>{{ $reserve_count }}</td>
        </tbody>
    </table>
@endsection

@push('js')
    
@endpush