@extends('layouts.main')

@section('title', 'Rotas de Voos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Rotas de Voos</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('flightroutes.create') }}"><button class="btn-default btn-green mr-4">Cadastrar</button></a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="#filterModal">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">N° da Rota de Voo</th>
                        <th>Cód. do Aeroporto de Origem</th>
                        <th>Cód. do Aeroporo de Destino</th>
                        <th>Valor da Passagem</th>
                        <th class="last-column">Ações</th>
                    </thead>

                    <tbody>
                        @foreach ($flight_routes as $flight_route)
                            <tr>
                                <td class="first-column">{{$flight_route->NR_ROTA_VOO}}</td>
                                <td>{{$flight_route->CD_ARPT_ORIG}}</td>
                                <td>{{$flight_route->CD_ARPT_DEST}}</td>
                                <td>{{$flight_route->VR_PASG}}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button class="icon icon-edit" data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="icon icon-delete" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    {{-- DELETE --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-delete" role="document">
            <div class="modal-content modal-content-delete">
                <div class="modal-header-delete text-white">
                    <h5 class="modal-title" id="deleteModalLabel">
                        Deletar linha de Rotas de Voos
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar a Rota de Voo
                        <span id="delete-code-em"></span>?
                    </p>
                    <div class="btn-div d-flex justify-content-end">
                        <button type="button" class="delete-dismiss btn-default btn-red"
                            data-dismiss="modal">Cancelar</button>
                        <button type="button" class="delete-submit btn-default btn-blue ml-4">Deletar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- EDITAR --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-default">
                <div class="modal-header-default text-white">
                    <h5 class="modal-title" id="editModalLabel">
                        Editar tabela de Rotas de Voos
                    </h5>
                </div>

                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código do Aeroporto de Origem</label>
                                <input class="register-input" type="text"
                                    placeholder="Insira o código do aeroporto de origem">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código do Aeroporto de Destino</label>
                                <input class="register-input" type="text"
                                    placeholder="Insira o código do aeroporto de destino">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Valor da Passagem</label>
                                <input class="register-input" type="text"
                                    placeholder="Insira o código do aeroporto de origem">
                            </div>
                        </div>

                        <div class="btn-div d-flex justify-content-end">
                            <button type="button" class="delete-dismiss btn-default btn-red"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" class="delete-submit btn-default btn-blue ml-4">Editar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- Filtro --}}
    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-default">
                <div class="modal-header-default text-white">
                    <h5 class="modal-title" id="filterModalLabel">
                        Filtrar tabela de Rotas de Voo
                    </h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-info alert-dismissable" role="alert" style="background-color: #53b1f8ef">
                        <i style="font-size: 125%" class="fa fa-exclamation-circle mr-2"></i>Este filtro deve responder à pergunta: 88
                        
                        <span style="cursor: pointer" data-dismiss="alert" class="close p-0" aria-label="Close"></span>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 px-5 my-2 my-md-4">
                            <label class="register-label" for="from">Tipo</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="civil">
                                    <option value="todas">Selecione o filtro desejado</option>
                                    <option value="reserva">Rotas sem reserva</option>
                                    <option value="passagem">Rotas sem valor da passagem</option>
                                    <option value="todas">Todas</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="filter-table-container" class="table-responsive" style="display: none">
                        <table id="filter-table" class="table table-stripped dt-bootstrap5">
                            <thead>
                                <th class="first-column">Nº da Rota</th>
                                <th>Cd. Aeroporto Orig.</th>
                                <th>Cd. Aeroporto Dest.</th>
                                <th class="last-column">Valor da Passagem</th>
                            </thead>
                            <tbody id="filter-table-body" style="display: none">
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="btn-div d-flex justify-content-end">
                        <button type="button" class="filter-dismiss btn-default btn-red"
                            data-dismiss="modal">Cancelar</button>
                        <button type="button" class="filter-submit btn-default btn-blue ml-4">Filtrar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        let filter_table = null;

        $(function() {
            $('#table-id').DataTable({
                language: {
                    url: "<?= asset('js/datatable.json') ?>"
                }
            });

            $('.delete-dismiss').on('click', function() {
                $('#deleteModal').modal('hide')
            });

            $('.filter-submit').on('click', function () {
                $('.filter-submit').html(`<img width="25" src="{{ asset('images/icons/loading.gif') }}">`);
                
                const type = $('select[name=civil]').val();

                $.ajax({
                    method: 'GET',
                    url: "<?=  route('flightroutes.filter', '_type_') ?>".replace('_type_', type),
                    success: res => {
                        $('#filter-table-container').fadeIn();
                        $('#filter-table-body').fadeOut('swing', function () {
                            if(filter_table) {
                                filter_table.destroy();

                                $('#filter-table-body').html('');
                            }
                            
                            for(let flight_route of res) {
                                $('#filter-table-body').append(`
                                <tr>
                                    <td class="first-column">${flight_route.NR_ROTA_VOO}</td>
                                    <td>${flight_route.CD_ARPT_ORIG || 'Não Informado'}</td>
                                    <td>${flight_route.CD_ARPT_DEST || 'Não Informado'}</td>
                                    <td class="last-column">${flight_route.VR_PASG || 'Não Informado'}</td>
                                    </tr>
                                    `);
                                }
                                
                                filter_table = $('#filter-table').DataTable({
                                    language: {
                                        url: "<?= asset('js/datatable.json') ?>"
                                }
                            });
                            
                            $('#filter-table-body').fadeIn();
                            $('.filter-submit').html('Filtrar');
                        });
                    },
                    error: err => {
                        $(this).html('Filtrar');
                        console.log(err);
                    }
                });
            });
        });
    </script>

@endpush
