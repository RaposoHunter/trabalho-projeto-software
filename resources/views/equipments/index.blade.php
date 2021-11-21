@extends('layouts.main')

@section('title', 'Equipamentos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Equipamentos</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('equipments.create') }}"><button class="btn-default btn-green mr-4">Cadastrar</button></a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="#filterModal">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">Cód.</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Descrição do Tipo</th>
                        <th>QNTD de Passageiros</th>
                        <th>QNTD de Motores</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($equipments as $equipment)
                            <tr id="linha-{{ $equipment->CD_EQPT }}">
                                <td class="first-column" data-id="{{ $equipment->CD_EQPT }}" data-index="CD_EQPT">{{ $equipment->CD_EQPT ?? '---' }}</td>
                                <td data-id="{{ $equipment->CD_EQPT }}" data-index="NM_EQPT">{{ $equipment->NM_EQPT ?? '---' }}</td>
                                <td data-id="{{ $equipment->CD_EQPT }}" data-index="DC_TIPO_EQPT">{{ $equipment->DC_TIPO_EQPT ?? '---' }}</td>
                                <td data-id="{{ $equipment->CD_EQPT }}" data-index="QT_MOTOR">{{ $equipment->QT_MOTOR ?? '---' }}</td>
                                <td data-id="{{ $equipment->CD_EQPT }}" data-index="IC_TIPO_PRPS">{{ $equipment->IC_TIPO_PRPS ?? '---' }}</td>
                                <td data-id="{{ $equipment->CD_EQPT }}" data-index="QT_PSGR">{{ $equipment->QT_PSGR ?? '---' }}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button id="edit-{{ $equipment->CD_EQPT }}" class="icon icon-edit"
                                            data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" form="delete_{{ $equipment->CD_EQPT }}"
                                            class="icon icon-delete" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form method="POST"
                                            action="{{ route('equipments.destroy', $equipment->CD_EQPT) }}"
                                            id="delete_{{ $equipment->CD_EQPT }}" class="form-delete-client">
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

    <div id="modals">


        {{-- DELETE --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-delete" role="document">
                <div class="modal-content modal-content-delete">
                    <div class="modal-header-delete text-white">
                        <h5 class="modal-title" id="deleteModalLabel">
                            Deletar linha de Equipamentos
                        </h5>
                    </div>

                    <div class="modal-body">
                        <p class="modal-text">
                            Deseja realmente deletar o Equipamento
                            <span id="delete-code-em"></span>?
                        </p>
                        <div class="btn-div d-flex justify-content-end">
                            <button type="button" data-dismiss="modal" class="delete-dismiss btn-default btn-red">Cancelar</button>
                            <button id="modal-button-delete" type="submit"
                                class="delete-submit btn-default btn-blue ml-4">Deletar</button>
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
                            Editar tabela de Equipamentos
                        </h5>
                    </div>

                    <div class="modal-body">
                        <form id="edit-form" action="" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Código do Equipamento</label>
                                    <input class="register-input" type="text" id="CD_EQPT" disabled
                                        placeholder="Insira o código do equipamento">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Nome do Equipamento</label>
                                    <input class="register-input" type="text" name="NM_EQPT" id="NM_EQPT"
                                        placeholder="Insira o nome do equipamento">
                                </div>

                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Selecione o Tipo do Equipamento</label>
                                    <div class="custom-select-2">
                                        <select class="register-input" name="DC_TIPO_EQPT" id="IC_TIPO_PRPS">
                                            <option value="">Selecione o tipo do equipamento</option>
                                            <option value="M">M</option>
                                            <option value="C">C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Descrição do Tipo</label>
                                    <input class="register-input" type="text" name="DC_TIPO_EQPT" placeholder="Insira a descrição do tipo">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Quantidade de Passageiros</label>
                                    <input class="register-input" name="QT_PSGR" type="text" id="QT_PSGR" min="0"
                                        placeholder="Insira a quantidade de passageiros">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Quantidade de Motores</label>
                                    <input class="register-input" type="text" name="QT_MOTOR" id="QT_MOTOR" min="0"
                                        placeholder="Insira a quantidade de motores">
                                </div>
                            </div>

                            <div class="btn-div d-flex justify-content-end">
                                <button type="button" class="delete-dismiss btn-default btn-red"
                                    data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="edit-submit btn-default btn-blue ml-4">Editar</button>
                            </div>
                            @method('PUT');
                        </form>
                    </div>
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
                        Filtrar tabela de Equipaments
                    </h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-color alert-dismissable" role="alert">
                        <i style="font-size: 125%" class="fa fa-exclamation-circle mr-2"></i>Este filtro deve responder às
                        perguntas: 38 e 40

                        <span style="cursor: pointer" data-dismiss="alert" class="close p-0" aria-label="Close"></span>
                    </div>
                    <div class="form-row">
                        <div class="col-12 px-5">
                            <h3 class="register-label" for="">Selecionar Filtro</h3>
                        </div>
                        <div class="col-md-6 px-5">
                            <div class="d-flex">
                                <label class="radio-container mr-1">
                                    <input class="radio-input" type="radio" name="filter_type" value="0">
                                    <span class="radio-span"></span>
                                </label>
                                <div class="register-label ml-4">Filtro 1 (Pergunta 38)</div>
                            </div>
                        </div>
                        <div class="col-md-6 px-5">
                            <div class="d-flex ml-5">
                                <label class="radio-container mr-1">
                                    <input class="radio-input" type="radio" name="filter_type" value="1">
                                    <span class="radio-span"></span>
                                </label>
                                <div class="register-label ml-4">Filtro 2 (Pergunta 40)</div>
                            </div>
                        </div>

                        {{-- FILTRO 1 - 38 --}}
                        <div class="filter_1 col-md-6 px-5 my-2 my-md-4" style="display: none">
                            <label class="register-label" for="type">Capacidade Max. Passageiros</label>
                            <input class="register-input" name="psgrs" type="number" min="1" placeholder="1...">
                        </div>
                        <div class="filter_1 col-md-6 px-5 my-2 my-md-4" style="display: none">
                            <label class="register-label" for="type">Tipo diferente de</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="type1">
                                    <option value="null">Selecione o tipo de equipamento</option>
                                    <option value="HELICOPTERO">Helicóptero</option>
                                    <option value="TURBO HELICE">Turbo Hélice</option>
                                    <option value="JATO">Jato</option>
                                </select>
                            </div>
                        </div>

                        {{-- FILTRO 2 - 40 --}}
                        <div class="filter_2 col-md-6 px-5 my-2 my-md-4" style="display: none">
                            <label class="register-label" for="type">Tipo</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="type2">
                                    <option value="null">Selecione o tipo de equipamento</option>
                                    <option value="HELICOPTERO">Helicóptero</option>
                                    <option value="TURBO HELICE">Turbo Hélice</option>
                                    <option value="JATO">Jato</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter_2 col-md-6 px-5 my-2 my-md-4" style="display: none">
                            <label class="register-label" for="type">Nome</label>
                            <input class="register-input" style="text-transform: uppercase" name="name"
                                placeholder="DOUGLAS">
                        </div>

                    </div>

                    <div id="filter-table-container-1" class="table-responsive" style="display: none">
                        <table id="filter-table-1" class="table table-stripped dt-bootstrap5">
                            <thead>
                                <th class="first-column">Nome</th>
                                <th class="last-column">Tipo</th>
                            </thead>
                            <tbody id="filter-table-body-1" style="display: none">

                            </tbody>
                        </table>
                    </div>

                    <div id="filter-table-container-2" class="table-responsive" style="display: none">
                        <table id="filter-table-2" class="table table-stripped dt-bootstrap5">
                            <thead>
                                <th class="first-column">Código</th>
                                <th>Nome</th>
                                <th class="last-column">Qtd. Motores</th>
                            </thead>
                            <tbody id="filter-table-body-2" style="display: none">

                            </tbody>
                        </table>
                    </div>

                    <div class="btn-div d-flex justify-content-end">
                        <button type="button" class="filter-dismiss btn-default btn-red"
                            data-dismiss="modal">Cancelar</button>
                        <button type="button" class="filter-submit btn-default btn-blue ml-4" disabled>Filtrar</button>
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

            /* deletar */
            $('.icon-delete').on('click', function() {
                let id = $(this).attr('form').split('_')[1];
                $('#delete-code-em').html($(`#linha-${id}`).children().eq(1).html())
                $("#modal-button-delete").attr('form', $(this).attr('form'));
            });

            /* editar */
            $('.icon-edit').on('click', function() {
                let id = $(this).attr('id').split('-')[1];
                let td_array = $(`#linha-${id}`).children();
                let input_array = $('#edit-form :input');
                $('#edit-form').attr('action', "<?= route('equipments.update', ['_id_']) ?>".replace('_id_',
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

            $('input[name=filter_type]').on('change', function() {
                $('.filter-submit').prop('disabled', false);

                if (this.value === '0') {
                    $('.filter_2').fadeOut('swing', function() {
                        $('.filter_1').fadeIn();
                    });
                } else {
                    $('.filter_1').fadeOut('swing', function() {
                        $('.filter_2').fadeIn();
                    });
                }
            });

            $('.filter-submit').on('click', function() {
                $('.filter-submit').html(
                    `<img width="25" src="{{ asset('images/icons/loading.gif') }}">`);
                const filter = $('input[name=filter_type]:checked').val();

                const psgrs = $('input[name=psgrs]').val() || Infinity;
                const type1 = $('select[name=type1]').val();

                const name = $('input[name=name]').val() || null;
                const type2 = $('select[name=type2]').val();

                const url = filter === '0' ?
                    "<?= route('equipments.filter1', ['_psgrs_', '_type_']) ?>".replace('_psgrs_', psgrs)
                    .replace('_type_', type1) :
                    "<?= route('equipments.filter2', ['_name_', '_type_']) ?>".replace('_name_', name)
                    .replace('_type_', type2);

                $.ajax({
                    method: 'GET',
                    url,
                    success: res => {
                        if (filter === '0') {
                            $('#filter-table-body-2').fadeOut('swing', function() {
                                $('#filter-table-container-2').fadeOut('swing',
                                    function() {
                                        $('#filter-table-container-1').fadeIn();
                                        $('#filter-table-body-1').fadeOut('swing',
                                            function() {
                                                if (filter_table) {
                                                    filter_table.destroy();

                                                    $('#filter-table-body-1')
                                                        .html('');
                                                }

                                                for (let equipment of res) {
                                                    $('#filter-table-body-1')
                                                        .append(`
                                                <tr>
                                                    <td class="first-column">${equipment.NM_EQPT}</td>
                                                    <td class="last-column">${equipment.DC_TIPO_EQPT}</td>
                                                </tr>
                                            `);
                                                }

                                                filter_table = $(
                                                        '#filter-table-1')
                                                    .DataTable({
                                                        language: {
                                                            url: "<?= asset('js/datatable.json') ?>"
                                                        }
                                                    });

                                                $('#filter-table-body-1')
                                                    .fadeIn();
                                                $('.filter-submit').html(
                                                    'Filtrar');
                                            });
                                    });
                            });
                        } else {
                            $('#filter-table-body-1').fadeOut('swing', function() {
                                $('#filter-table-container-1').fadeOut('swing',
                                    function() {
                                        $('#filter-table-container-2').fadeIn();
                                        $('#filter-table-body-2').fadeOut('swing',
                                            function() {
                                                if (filter_table) {
                                                    filter_table.destroy();

                                                    $('#filter-table-body-2')
                                                        .html('');
                                                }

                                                for (let equipment of res) {
                                                    if (name.toUpperCase() ===
                                                        'DOUGLAS') equipment
                                                        .QT_MOTOR++;

                                                    $('#filter-table-body-2')
                                                        .append(`
                                                <tr>
                                                    <td class="first-column">${equipment.CD_EQPT}</td>
                                                    <td>${equipment.NM_EQPT}</td>
                                                    <td class="last-column">${equipment.QT_MOTOR}</td>
                                                </tr>
                                            `);
                                                }

                                                filter_table = $(
                                                        '#filter-table-2')
                                                    .DataTable({
                                                        language: {
                                                            url: "<?= asset('js/datatable.json') ?>"
                                                        }
                                                    });

                                                $('#filter-table-body-2')
                                                    .fadeIn();
                                                $('.filter-submit').html(
                                                    'Filtrar');
                                            });
                                    });
                            });
                        }
                    },
                    error: err => {
                        console.log(err);
                    }
                });
            });

            // EVENTOS RELACIONADOS COM O UPDATE - BEGIN

            // $('.eqpt-edit').on('click', function() {
            //     const id = this.dataset.id;

            //     if (!id) {
            //         toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
            //         return;
            //     }

            //     $.ajax({
            //         method: 'GET',
            //         url: `/equipamentos/${id}`,
            //         success: res => {
            //             $('#eqpt-edit-code').html(res.CD_EQPT);

            //             $('input#CD_EQPT').val(res.CD_EQPT);
            //             $('input[name=NM_EQPT]').val(res.NM_EQPT);
            //             $('input[name=DC_TIPO_EQPT]').val(res.DC_TIPO_EQPT);
            //             $('input[name=QT_MOTOR]').val(res.QT_MOTOR);
            //             $('select[name=IC_TIPO_PRPS]').val(res.IC_TIPO_PRPS);
            //             $('input[name=QT_PSGR]').val(res.QT_PSGR);

            //             $('.eqpt-edit-submit').attr('data-id', res.CD_EQPT);

            //             $('#eqptUpdateModal').modal('show');
            //         },
            //         error: err => {
            //             console.log(err);
            //         }
            //     });
            // });

            // $('.edit-submit').on('click', function() {
            //     const id = this.dataset.id;

            //     if (!id) {
            //         toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
            //         return;
            //     }

            //     $.ajax({
            //         method: 'PUT',
            //         url: `/equipamentos/${id}`,
            //         data: {
            //             '_token': $('meta[name=csrf-token]').attr('content'),
            //             '_method': 'PUT',
            //             NM_EQPT: $('input[name=NM_EQPT]').val(),
            //             DC_TIPO_EQPT: $('input[name=DC_TIPO_EQPT]').val(),
            //             QT_MOTOR: $('input[name=QT_MOTOR]').val(),
            //             IC_TIPO_PRPS: $('select[name=IC_TIPO_PRPS]').val(),
            //             QT_PSGR: $('input[name=QT_PSGR]').val(),
            //         },
            //         success: res => {
            //             $('#eqptUpdateModal').modal('hide');

            //             toastr.success(res.message);

            //             for (let td of $(`td[data-id=${id}]`)) {
            //                 $(td).html(res.equipment[td.dataset.index]);
            //             }
            //         },
            //         error: err => {
            //             console.log(err);
            //             toastr.error(err.responseJSON);
            //         }
            //     });
            // });

            // $('#eqptUpdateModal').on('hidden.bs.modal', function() {
            //     $('input#CD_EQPT').val('');
            //     $('input[name=NM_EQPT]').val('');
            //     $('input[name=DC_TIPO_EQPT]').val('');
            //     $('input[name=QT_MOTOR]').val('');
            //     $('select[name=IC_TIPO_PRPS]').val('');
            //     $('input[name=QT_PSGR]').val('');
            // });
            // // EVENTOS RELACIONADOS COM O UPDATE - END

            // // EVENTOS RELACIONADOS COM O DELETE - BEGIN
            // $('.delete').on('click', function() {
            //     console.log(10);
            //     const id = this.dataset.id;

            //     if (!id) {
            //         toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
            //         return;
            //     }

            //     $('#delete-code').html(id);
            //     $('#delete-code-em').html(id);
            //     $('.delete-submit').attr('data-id', id);

            //     $('#deleteModal').modal('show');
            // });

            // $('.delete-submit').on('click', function() {
            //     const id = this.dataset.id;

            //     if (!id) {
            //         toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
            //         return;
            //     }

            //     $.ajax({
            //         method: 'DELETE',
            //         url: `/equipamentos/${id}`,
            //         data: {
            //             '_token': $('meta[name=csrf-token]').attr('content'),
            //             '_method': 'DELETE',
            //         },
            //         success: res => {
            //             $('#deleteModal').modal('hide');
            //             $(`tr[data-id=${id}]`).remove()

            //             toastr.success(res);
            //         },
            //         error: err => {
            //             console.log(err);
            //             toastr.error(err.responseJSON);
            //         }
            //     });
            // });

            // $('#deleteModal').on('hidden.bs.modal', function() {
            //     $('#delete-code').html('');
            //     $('#delete-code-em').html('');
            //     $('.delete-submit').attr('data-id', '');
            // });
            $('.custom-select-2').on('click', function() {
                $(this).find('.select-selected').addClass('select-item-black');
            });

            $('.date').mask('00/00/0000');
        });
    </script>

@endpush
