@extends('layouts.main')

@section('title', 'Companhias Aéreas')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Companhias Aéreas</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('airlines.create') }}"><button class="btn-default btn-green mr-4">Cadastrar</button></a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="#filterModal">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">Cód. da Companhia</th>
                        <th>Nome da Companhia</th>
                        <th>Cód. do País</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($airlines as $airline)
                            <tr id="linha-{{$airline->CD_CMPN_AEREA}}">
                                <td class="first-column">{{$airline->CD_CMPN_AEREA}}</td>
                                <td>{{$airline->NM_CMPN_AEREA}}</td>
                                <td>{{$airline->CD_PAIS}}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button id="edit-{{ $airline->CD_CMPN_AEREA }}" class="icon icon-edit" data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" form="delete_{{ $airline->CD_CMPN_AEREA }}" class="icon icon-delete" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form method="POST" action="{{ route('airlines.destroy', $airline->CD_CMPN_AEREA) }}"
                                            id="delete_{{ $airline->CD_CMPN_AEREA }}" class="form-delete-client">
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
                        Deletar linha de Companhias Aéreas
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar a Companhia Aérea
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
                        Editar tabela de Companhias Aéreas
                    </h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" action="" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Nome da Companhia</label>
                                <input class="register-input" type="text" name="NM_CMPN_AEREA" placeholder="Insira o nome da companhia">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código da Companhia</label>
                                <input class="register-input" type="text" name="CD_CMPN_AEREA" placeholder="Insira o código do país">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código do País</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="CD_PAIS">
                                        <option value="">Selecione o código do país</option>
                                        @foreach ($countries->toQuery()->orderBy('CD_PAIS')->get() as $country)
                                            <option value="{{ $country->CD_PAIS }}">{{ $country->CD_PAIS }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="btn-div d-flex justify-content-end">
                            <button type="button" class="delete-dismiss btn-default btn-red"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="delete-submit btn-default btn-blue ml-4">Editar</button>
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
                        Filtrar tabela de Companhias Aéreas
                    </h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-color alert-dismissable" role="alert">
                        <i style="font-size: 125%" class="fa fa-exclamation-circle mr-2"></i>Este filtro deve responder às perguntas: 4, 8 e 83

                        <span style="cursor: pointer" data-dismiss="alert" class="close p-0" aria-label="Close"></span>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 px-5 my-2 my-md-4">
                            <label class="register-label" for="type">Tipo de Companhia</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="type">
                                    <option value="null">Selecione o tipo de c. aérea</option>
                                    <option value="nacional">Nacional</option>
                                    <option value="estrangeira">Estrangeira</option>
                                    <option value="sem-pais">Sem país definido</option>
                                    <option value="todas">Todas</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="filter-table-container" class="table-responsive" style="display: none">
                        <table id="filter-table" class="table table-stripped dt-bootstrap5">
                            <thead>
                                <th class="first-column">Nome</th>
                                <th>Cd. País</th>
                                <th class="last-column">Capacidade total</th>
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
                $('#edit-form').attr('action', "<?= route('airlines.update', ['_id_']) ?>".replace('_id_',
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
                $('.filter-submit').html(`<img width="25" src="{{ asset('images/icons/loading.gif') }}">`);
                const type = $('select[name=type]').val();

                $.ajax({
                    method: 'GET',
                    url: "<?=  route('airlines.filter', '_type_') ?>".replace('_type_', type),
                    success: res => {
                        $('#filter-table-container').fadeIn();
                        $('#filter-table-body').fadeOut('swing', function () {
                            if(filter_table) {
                                filter_table.destroy();

                                $('#filter-table-body').html('');
                            }

                            for(let airline of res) {
                                if(airline.CD_PAIS == 'US') airline.QT_TOTAL_PSGR += 10;

                                $('#filter-table-body').append(`
                                    <tr>
                                        <td class="first-column">${airline.NM_CMPN_AEREA}</td>
                                        <td>${airline.CD_PAIS || 'Não Informado'}</td>
                                        <td class="last-column">${airline.QT_TOTAL_PSGR}</td>
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
                        })
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

            // Não funciona. Choro e lágrimas
            // $('#filterModal').on('transitioncancel', function(e) {
            //     console.log(10);
            //     if(e.target.tagName == 'BUTTON') return;

            //     if(filter_table) {
            //         filter_table.destroy();

            //         $('#filter-table-body').html('');
            //         $('#filter-table-body').fadeOut();
            //         $('#filter-table-container').fadeOut();
            //     }
            // });
        });
    </script>

@endpush
