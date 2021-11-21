@extends('layouts.main')

@section('title', 'Aeroportos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Aeroportos</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('airports.create') }}">
                <button class="btn-default btn-green">Cadastrar</button>
            </a>
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
                        @foreach ($airports as $airport)
                            <tr id="linha-{{ $airport->CD_ARPT }}">
                                <td class="first-column">{{ $airport->CD_ARPT }}</td>
                                <td>{{ $airport->CD_PAIS }}</td>
                                <td>{{ $airport->SG_UF ?? '---' }}</td>
                                <td>{{ $airport->NM_CIDD }}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button id="edit-{{ $airport->CD_ARPT }}" class="icon icon-edit"
                                            data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" form="delete_{{ $airport->CD_ARPT }}"
                                            class="icon icon-delete" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form method="POST" action="{{ route('airports.destroy', $airport->CD_ARPT) }}"
                                            id="delete_{{ $airport->CD_ARPT }}" class="form-delete-client">
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
                        Deletar linha de Aeroportos
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar o Aeroporto
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

    {{-- EDITAR --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-default">
                <div class="modal-header-default text-white">
                    <h5 class="modal-title" id="editModalLabel">
                        Editar tabela de Aeroportos
                    </h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" action="" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código da Aeroporto</label>
                                <input class="register-input" type="text" name="CD_ARPT" placeholder="Insira o Código da Aeroporto">
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
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Unidade Federativa</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="NM_CIDD">
                                        <option value="">Selecione sua unidade federativa</option>
                                        @foreach ($states->toQuery()->orderBy('SG_UF')->get() as $state)
                                            <option value="{{ $state->SG_UF }}">{{ $state->SG_UF }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Cidade</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="NM_CIDD">
                                        <option value="">Selecione a Cidade</option>
                                        @foreach ($states->toQuery()->orderBy('NM_UF')->get() as $state)
                                            <option value="{{ $state->NM_UF }}">{{ $state->NM_UF }}</option>
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
@endsection

@push('js')
    <script>
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
                $('#delete-code-em').html($(`#linha-${id}`).children().eq(0).html())
                $("#modal-button-delete").attr('form', $(this).attr('form'));
            });

            /* editar */
            $('.icon-edit').on('click', function() {
                let id = $(this).attr('id').split('-')[1];
                let td_array = $(`#linha-${id}`).children();
                let input_array = $('#edit-form :input');
                $('#edit-form').attr('action', "<?= route('airports.update', ['_id_']) ?>".replace('_id_',
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

            $('.custom-select-2').on('click', function() {
                $(this).find('.select-selected').addClass('select-item-black');
            });

            $('.date').mask('00/00/0000');
        });
    </script>

@endpush
