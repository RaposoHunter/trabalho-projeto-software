@extends('layouts.main')

@section('title', 'Aeroportos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Aeroportos</h1>
        <div class="d-flex justify-content-end">
            <a href="{{route('airports.create')}}">
                <button class="btn-default btn-green mr-4">Cadastrar</button>
            </a>
            <button class="btn-default btn-blue ml-2 mr-1">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">Cód. do Aeroporto</th>
                        <th>Cód. do País</th>
                        <th>UF</th>
                        <th>Cidade</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        <td class="first-column">01</td>
                        <td>54</td>
                        <td>RJ</td>
                        <td>Rio de Janeiro</td>
                        <td class="last-column">
                            <div class="d-flex justify-content-center">
                                <button class="icon icon-edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="icon icon-delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tbody>
                </table>
            </div>

        </div>


    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $('#table-id').DataTable({
                language: {
                    url: 'http://projeto.software/js/datatable.json'
                }
            });
        });
    </script>

@endpush

