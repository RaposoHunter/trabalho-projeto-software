@extends('layouts.main')

@section('title', 'Equipamentos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Equipamentos</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('equipments.create') }}"><button class="btn-default btn-green mr-4">Cadastrar</button></a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="">Filtrar</button>
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
                            <td class="first-column" data-id="{{ $equipment->CD_EQPT }}" data-index="CD_EQPT">
                                {{ $equipment->CD_EQPT ?? '---' }}</td>
                            <td data-id="{{ $equipment->CD_EQPT }}" data-index="NM_EQPT">
                                {{ $equipment->NM_EQPT ?? '---' }}
                            </td>
                            <td data-id="{{ $equipment->CD_EQPT }}" data-index="DC_TIPO_EQPT">
                                {{ $equipment->DC_TIPO_EQPT ?? '---' }}</td>
                            <td data-id="{{ $equipment->CD_EQPT }}" data-index="QT_MOTOR">
                                {{ $equipment->QT_MOTOR ?? '---' }}
                            </td>
                            <td data-id="{{ $equipment->CD_EQPT }}" data-index="IC_TIPO_PRPS">
                                {{ $equipment->IC_TIPO_PRPS ?? '---' }}</td>
                            <td data-id="{{ $equipment->CD_EQPT }}" data-index="QT_PSGR">
                                {{ $equipment->QT_PSGR ?? '---' }}
                            </td>
                            <td class="last-column">
                                <div class="d-flex justify-content-center">
                                    <button data-id="{{ $equipment->CD_EQPT }}" class="icon icon-edit eqpt-edit" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button data-id="{{ $equipment->CD_EQPT }}" class="icon icon-delete delete" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
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
                            <button type="button" class="delete-dismiss btn-default btn-red">Cancelar</button>
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
                            Editar tabela de Equipamentos
                        </h5>
                    </div>

                    <div class="modal-body">
                        <form action="">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Nome do Equipamento</label>
                                    <input class="register-input" type="text" name="NM_EQPT" id="NM_EQPT" placeholder="Insira o nome do equipamento">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Código do Equipamento</label>
                                    <input class="register-input" type="text" id="CD_EQPT" disabled placeholder="Insira o código do equipamento">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Selecione o Tipo do Equipamento</label>
                                    <div class="custom-select-2">
                                        <select class="register-input" name="DC_TIPO_EQPT" id="DC_TIPO_EQPT">
                                            <option value="">Selecione o tipo do equipamento</option>
                                            <option value="O">xd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Descrição do Tipo</label>
                                    <input class="register-input" type="text" placeholder="Insira a descrição do tipo">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Quantidade de Passageiros</label>
                                    <input class="register-input" name="QT_PSGR" type="number" id="QT_PSGR" min="0"
                                        placeholder="Insira a quantidade de passageiros">
                                </div>
                                <div class="col-md-6 px-5 my-2 my-md-4">
                                    <label class="register-label" for="">Quantidade de Motores</label>
                                    <input class="register-input" type="text" name="QT_MOTOR" id="QT_MOTOR" min="0" placeholder="Insira a quantidade de motores">
                                </div>
                            </div>

                            <div class="btn-div d-flex justify-content-end">
                                <button type="button" class="delete-dismiss btn-default btn-red"
                                    data-dismiss="modal">Cancelar</button>
                                <button type="button" class="edit-submit btn-default btn-blue ml-4">Editar</button>
                            </div>
                        </form>
                    </div>

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
                    url: 'http://projeto.software/js/datatable.json'
                }
            });
            // EVENTOS RELACIONADOS COM O UPDATE - BEGIN

            $('.eqpt-edit').on('click', function() {
                const id = this.dataset.id;

                if (!id) {
                    toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
                    return;
                }

                $.ajax({
                    method: 'GET',
                    url: `/equipamentos/${id}`,
                    success: res => {
                        $('#eqpt-edit-code').html(res.CD_EQPT);

                        $('input#CD_EQPT').val(res.CD_EQPT);
                        $('input[name=NM_EQPT]').val(res.NM_EQPT);
                        $('input[name=DC_TIPO_EQPT]').val(res.DC_TIPO_EQPT);
                        $('input[name=QT_MOTOR]').val(res.QT_MOTOR);
                        $('select[name=IC_TIPO_PRPS]').val(res.IC_TIPO_PRPS);
                        $('input[name=QT_PSGR]').val(res.QT_PSGR);

                        $('.eqpt-edit-submit').attr('data-id', res.CD_EQPT);

                        $('#eqptUpdateModal').modal('show');
                    },
                    error: err => {
                        console.log(err);
                    }
                });
            });

            $('.edit-submit').on('click', function() {
                const id = this.dataset.id;

                if (!id) {
                    toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
                    return;
                }

                $.ajax({
                    method: 'PUT',
                    url: `/equipamentos/${id}`,
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        '_method': 'PUT',
                        NM_EQPT: $('input[name=NM_EQPT]').val(),
                        DC_TIPO_EQPT: $('input[name=DC_TIPO_EQPT]').val(),
                        QT_MOTOR: $('input[name=QT_MOTOR]').val(),
                        IC_TIPO_PRPS: $('select[name=IC_TIPO_PRPS]').val(),
                        QT_PSGR: $('input[name=QT_PSGR]').val(),
                    },
                    success: res => {
                        $('#eqptUpdateModal').modal('hide');

                        toastr.success(res.message);

                        for (let td of $(`td[data-id=${id}]`)) {
                            $(td).html(res.equipment[td.dataset.index]);
                        }
                    },
                    error: err => {
                        console.log(err);
                        toastr.error(err.responseJSON);
                    }
                });
            });

            $('#eqptUpdateModal').on('hidden.bs.modal', function() {
                $('input#CD_EQPT').val('');
                $('input[name=NM_EQPT]').val('');
                $('input[name=DC_TIPO_EQPT]').val('');
                $('input[name=QT_MOTOR]').val('');
                $('select[name=IC_TIPO_PRPS]').val('');
                $('input[name=QT_PSGR]').val('');
            });
            // EVENTOS RELACIONADOS COM O UPDATE - END

            // EVENTOS RELACIONADOS COM O DELETE - BEGIN
            $('.delete').on('click', function() {
                console.log(10);
                const id = this.dataset.id;

                if (!id) {
                    toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
                    return;
                }

                $('#delete-code').html(id);
                $('#delete-code-em').html(id);
                $('.delete-submit').attr('data-id', id);

                $('#deleteModal').modal('show');
            });

            $('.delete-submit').on('click', function() {
                const id = this.dataset.id;

                if (!id) {
                    toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
                    return;
                }

                $.ajax({
                    method: 'DELETE',
                    url: `/equipamentos/${id}`,
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        '_method': 'DELETE',
                    },
                    success: res => {
                        $('#deleteModal').modal('hide');
                        $(`tr[data-id=${id}]`).remove()

                        toastr.success(res);
                    },
                    error: err => {
                        console.log(err);
                        toastr.error(err.responseJSON);
                    }
                });
            });

            $('#deleteModal').on('hidden.bs.modal', function() {
                $('#delete-code').html('');
                $('#delete-code-em').html('');
                $('.delete-submit').attr('data-id', '');
            });

            $('.delete-dismiss').on('click', function() {
                $('#deleteModal').modal('hide')
            })
            // EVENTOS RELACIONADOS COM O DELETE - END
        });
    </script>

@endpush
