{{-- importa a barra lateral e os scripts gerais --}}
@extends('layouts.main')

{{-- coloca o titulo da pagina atual --}}
@section('title', 'Voos')

{{-- conteudo da pagina com as tabelas --}}
@section('container')
    <div class="main-container">
        <h1 class="page-title">Voos</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('flights.create') }}"><button class="btn-default btn-green mr-4">Cadastrar</button></a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="#filterModal">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">N° do Voo</th>
                        <th>N° da Rota</th>
                        <th>Cód. da Aeronave</th>
                        <th>Data de Saída</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($flights as $flight)
                            <tr id="linha_{{$flight->NR_VOO }}D{{$flight->DT_SAIDA_VOO}}">
                                <td class="first-column">{{ $flight->NR_VOO }}</td>
                                <td>{{ $flight->NR_ROTA_VOO }}</td>
                                <td>{{ $flight->CD_ARNV }}</td>
                                <td>{{ \Carbon\Carbon::parse($flight->DT_SAIDA_VOO)->format('d/m/Y') }}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button id="edit_{{$flight->NR_VOO}}D{{$flight->DT_SAIDA_VOO}}" class="icon icon-edit" data-toggle="modal"
                                            data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="icon icon-delete" form="delete_{{$flight->NR_VOO}}D{{$flight->DT_SAIDA_VOO}}"
                                            data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form method="POST" action="{{ route('flights.destroy', $flight->NR_VOO.'D'.$flight->DT_SAIDA_VOO)}}"
                                            id="delete_{{$flight->NR_VOO}}D{{$flight->DT_SAIDA_VOO}}" class="form-delete-client">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    {{-- MODAL DELETE --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-delete" role="document">
            <div class="modal-content modal-content-delete">
                <div class="modal-header-delete text-white">
                    <h5 class="modal-title" id="deleteModalLabel">
                        Deletar linha de Voos
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar o Voo
                        <span id="delete-code-em"></span>?
                    </p>
                    <div class="btn-div d-flex justify-content-end">
                        <button type="button" class="delete-dismiss btn-default btn-red"
                            data-dismiss="modal">Cancelar</button>
                        <button id="modal-button-delete" type="submit"
                            class="delete-submit btn-default btn-blue ml-4">Deletar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- MODAL EDITAR --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-default">
                <div class="modal-header-default text-white">
                    <h5 class="modal-title" id="editModalLabel">
                        Editar tabela de Voos
                    </h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" action="" method="POST">
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">N° do Voo</label>
                                <input class="register-input" name="NR_VOO" type="text" placeholder="Insira o número do voo">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">N° da Rota</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="NR_ROTA_VOO">
                                        <option value="">Selecione o número da rota</option>
                                        @foreach ($flight_routes->toQuery()->orderBy('NR_ROTA_VOO')->get() as $flight_route)
                                            <option value="{{ $flight_route->NR_ROTA_VOO }}">{{ $flight_route->NR_ROTA_VOO }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código da Aeronave</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="CD_ARNV">
                                        <option value="">Selecione o código da aeronave</option>
                                        @foreach ($airships->toQuery()->orderBy('CD_ARNV')->get() as $airship)
                                            <option value="{{ $airship->CD_ARNV }}">{{ $airship->CD_ARNV }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Data de Saída</label>
                                <input class="register-input date" name="DT_SAIDA_VOO" type="text" placeholder="Insira a data de saída">
                            </div>
                        </div>

                        <div class="btn-div d-flex justify-content-end">
                            <button type="button" class="delete-dismiss btn-default btn-red"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="delete-submit btn-default btn-blue ml-4">Editar</button>
                        </div>
                        @method('PUT')
                        <input type="hidden" name="old_NR_VOO">
                        <input type="hidden" name="old_DT_SAIDA_VOO">
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- MODAL Filtro --}}
    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-default">
                <div class="modal-header-default text-white">
                    <h5 class="modal-title" id="filterModalLabel">
                        Filtrar tabela de Voos
                    </h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-color alert-dismissable" role="alert">
                        <i style="font-size: 125%" class="fa fa-exclamation-circle mr-2"></i>Este filtro deve responder à
                        pergunta: 69

                        <span style="cursor: pointer" data-dismiss="alert" class="close p-0" aria-label="Close"></span>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 px-5 my-2 my-md-4">
                            <label class="register-label" for="from">Origem</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="from">
                                    <option value="null">Selecione a cidade de origem</option>
                                    @foreach (\App\Airport::getCities() as $city)
                                        <option value="{{ $city }}">{{ $city }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 px-5 my-2 my-md-4">
                            <label class="register-label" for="to">Destino</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="to">
                                    <option value="null">Selecione a cidade de destino</option>
                                    @foreach (\App\Airport::getCities() as $city)
                                        <option value="{{ $city }}">{{ $city }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="filter-table-container" class="table-responsive" style="display: none">
                        <table id="filter-table" class="table table-stripped dt-bootstrap5">
                            <thead>
                                <th class="first-column">Número</th>
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

{{-- codigo JS / jQuery --}}
@push('js')
    <script>
        const format = {
            minimumFractionDigits: 2,
            style: 'currency',
            currency: 'BRL'
        };

        let filter_table = null;

        $(function() {
            $('#table-id').DataTable({
                language: {
                    url: "<?= asset('js/datatable.json') ?>"
                }
            });

            $('.delete-dismiss').on('click', function() {
                $('#deleteModal').modal('hide');
            });

            /* deletar */
            $('.icon-delete').on('click', function() {

                let id = $(this).attr('form').split('_')[1];
                $('#delete-code-em').html(`${$(`#linha_${id}`).children().eq(0).html()} do dia ${$(`#linha_${id}`).children().eq(3).html()}`)
                $("#modal-button-delete").attr('form', $(this).attr('form'));
            });

            /* editar */
            $('.icon-edit').on('click', function() {
                let id = $(this).attr('id').split('_')[1];

                $('input[name=old_NR_VOO]').val(id.split('D')[0]);
                $('input[name=old_DT_SAIDA_VOO]').val(id.split('D')[1]);

                let td_array = $(`#linha_${id}`).children();
                let input_array = $('#edit-form :input');
                $('#edit-form').attr('action', "<?= route('flights.update', ['_id_']) ?>".replace('_id_',
                    id));
                for (i = 0; i < td_array.length; i++) {
                    // -1 pois n ignoramos o id aqui
                    if (input_array.eq(i).attr('type') == "hidden") continue;
                    if (input_array.eq(i).attr('type') == undefined) {
                        input_array.eq(i).val(td_array.eq(i - 1).html());
                        input_array.eq(i).next().html(td_array.eq(i - 1).html()).addClass(
                            'select-item-black');
                    } else {
                        input_array.eq(i).val(td_array.eq(i - 1).html());
                    }
                }
            });

            $('.filter-submit').on('click', function() {
                const from = $('select[name=from]').val();
                const to = $('select[name=to]').val();

                $.ajax({
                    method: 'GET',
                    url: "<?= route('flights.filter', ['_from_', '_to_']) ?>".replace('_from_',
                        from).replace('_to_', to),
                    success: res => {
                        $('#filter-table-container').fadeIn();
                        $('#filter-table-body').fadeOut('swing', function() {
                            if (filter_table) {
                                filter_table.destroy();

                                $('#filter-table-body').html('');
                            }

                            for (let flight of res) {
                                $('#filter-table-body').append(`
                                    <tr>
                                        <td class="first-column">${flight.NR_VOO}</td>
                                        <td>${flight.CD_ARPT_ORIG || 'Não Informado'}</td>
                                        <td>${flight.CD_ARPT_DEST}</td>
                                        <td class="last-column">${flight.VR_PASG != null ? flight.VR_PASG.toLocaleString('pt-BR', format) : 'Não Informado'}</td>
                                    </tr>
                                `);
                            }

                            filter_table = $('#filter-table').DataTable({
                                language: {
                                    url: "<?= asset('js/datatable.json') ?>"
                                }
                            });

                            $('#filter-table-body').fadeIn()
                        });
                    },
                    error: err => {
                        console.log(err);
                    }
                });
            });

            $('.custom-select-2').on('click', function() {
                $(this).find('.select-selected').addClass('select-item-black');
            });

            $('.date').mask('00/00/0000');
        });
    </script>

@endpush
