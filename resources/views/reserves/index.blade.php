@extends('layouts.main')

@section('title', 'Reservas')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Reservas</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('reserves.create') }}">
                <button class="btn-default btn-green mr-4">Cadastrar</button>
            </a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="#filterModal">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">Cód. do Passageiro</th>
                        <th>N° do Voo</th>
                        <th>Data de saída</th>
                        <th>Desconto da Passagem</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($reserves as $reserve)
                            <tr id="linha_{{$reserve->CD_PSGR}}N{{$reserve->NR_VOO}}D{{$reserve->DT_SAIDA_VOO}}">
                                <td class="first-column">{{$reserve->CD_PSGR}}</td>
                                <td>{{$reserve->NR_VOO}}</td>
                                <td>{{$reserve->DT_SAIDA_VOO}}</td>
                                <td>{{$reserve->PC_DESC_PASG}}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button id="edit_{{$reserve->CD_PSGR}}N{{$reserve->NR_VOO}}D{{$reserve->DT_SAIDA_VOO}}" class="icon icon-edit" data-toggle="modal"
                                            data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="icon icon-delete" form="delete_{{$reserve->CD_PSGR}}N{{$reserve->NR_VOO}}D{{$reserve->DT_SAIDA_VOO}}"
                                            data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form method="POST" action="{{ route('reserves.destroy', $reserve->CD_PSGR.'N'.$reserve->NR_VOO.'D'.$reserve->DT_SAIDA_VOO)}}"
                                            id="delete_{{$reserve->CD_PSGR}}N{{$reserve->NR_VOO}}D{{$reserve->DT_SAIDA_VOO}}" class="form-delete-client">
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
    {{-- DELETE --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-delete" role="document">
            <div class="modal-content modal-content-delete">
                <div class="modal-header-delete text-white">
                    <h5 class="modal-title" id="deleteModalLabel">
                        Deletar linha de Reservas
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar a Reserva do passageiro
                        <span id="delete-code-em"></span>?
                    </p>
                    <div class="btn-div d-flex justify-content-end">
                        <button type="button" class="delete-dismiss btn-default btn-red"
                            data-dismiss="modal">Cancelar</button>
                        <button id="modal-button-delete" type="submit" class="delete-submit btn-default btn-blue ml-4">Deletar</button>
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
                        Editar tabela de Reservas
                    </h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" action="" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código do Passageiro</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="CD_PSGR">
                                        <option value="">Selecione o código do passageiro</option>
                                        @foreach ($passengers->toQuery()->orderBy('CD_PSGR')->get() as $passenger)
                                            <option value="{{ $passenger->CD_PSGR }}">{{ $passenger->CD_PSGR }}</option>
                                        @endforeach
                                    </select>
                                </div>                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">N° do Voo</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="NR_VOO">
                                        <option value="">Selecione o número do voo</option>
                                        {{-- @foreach ($flights->toQuery()->orderBy('NR_VOO')->get() as $flight)
                                            <option value="{{ $flight->NR_VOO }}">{{ $flight->NR_VOO }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Data de Saída</label>
                                <input class="register-input" type="text" placeholder="Insira a data de saída">
                            </div>

                        </div>

                        <div class="btn-div d-flex justify-content-end">
                            <button type="button" class="delete-dismiss btn-default btn-red"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" class="delete-submit btn-default btn-blue ml-4">Editar</button>
                        </div>
                        @method('PUT');
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
                        Filtrar tabela de Reservas
                    </h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-color alert-dismissable" role="alert">
                        <i style="font-size: 125%" class="fa fa-exclamation-circle mr-2"></i>Este filtro deve responder à pergunta: 5

                        <span style="cursor: pointer" data-dismiss="alert" class="close p-0" aria-label="Close"></span>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 px-5 my-2 my-md-4">
                            <label class="register-label" for="type">Menor Cd. Passageiro</label>
                            <input class="register-input" name="min" type="number" min="0" placeholder="0">
                        </div>
                        <div class="col-md-6 px-5 my-2 my-md-4">
                            <label class="register-label" for="type">Maior Cd. Passageiro</label>
                            <input class="register-input" name="max" type="number" min="0" placeholder="300">
                        </div>
                    </div>

                    <div id="filter-table-container" class="table-responsive" style="display: none">
                        <table id="filter-table" class="table table-stripped dt-bootstrap5">
                            <thead>
                                <th class="first-column">Número do Voo</th>
                                <th>Dt. Partida</th>
                                <th class="last-column">Cd. Passageiro</th>
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
            filter_table = $('#table-id').DataTable({
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
                console.log(id);
                $('#delete-code-em').html($(`#linha_${id}`).children().eq(1).html())
                $("#modal-button-delete").attr('form', $(this).attr('form'));
            });

            /* editar */
            $('.icon-edit').on('click', function() {
                let id = $(this).attr('id').split('_')[1];
                let td_array = $(`#linha_${id}`).children();
                let input_array = $('#edit-form :input');
                $('#edit-form').attr('action', "<?= route('reserves.update', ['_id_']) ?>".replace('_id_',
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

            $('.filter-submit').on('click', function () {
                const min = $('input[name=min]').val() || 0;
                const max = $('input[name=max]').val() || Infinity;

                $.ajax({
                    method: 'GET',
                    url: "<?=  route('reserves.filter', ['_min_', '_max_']) ?>".replace('_min_', min).replace('_max_', max),
                    success: res => {
                        $('#filter-table-container').fadeIn();
                        $('#filter-table-body').fadeOut('swing', function () {
                            if(filter_table) {
                                filter_table.destroy();

                                $('#filter-table-body').html('');
                            }

                            for(let reserve of res) {
                                $('#filter-table-body').append(`
                                    <tr>
                                        <td class="first-column">${reserve.NR_VOO}</td>
                                        <td>${new Date(reserve.DT_SAIDA_VOO + '/').toLocaleDateString()}</td>
                                        <td class="last-column">${reserve.CD_PSGR}</td>
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
