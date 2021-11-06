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
                        <td data-id="{{ $equipment->CD_EQPT }}" data-index="NM_EQPT">{{ $equipment->NM_EQPT ?? '---' }}
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
                                <button data-id="{{ $equipment->CD_EQPT }}" class="icon icon-edit eqpt-edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button data-id="{{ $equipment->CD_EQPT }}" class="icon icon-delete eqpt-delete">
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
        {{-- UPDATE --}}
        <div class="modal fade " id="eqptUpdateModal" tabindex="-1" role="dialog" aria-labelledby="eqptUpdateModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eqptUpdateModalLabel">Editando equipamento <strong
                                id="eqpt-edit-code">---</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Cód.</label>
                                <input class="form-control" type="text" id="CD_EQPT" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="NM_EQPT">Nome</label>
                                <input class="form-control" name="NM_EQPT" type="text" id="NM_EQPT">
                            </div>
                            <div class="col-md-6">
                                <label for="DC_TIPO_EQPT">Tipo</label>
                                <input class="form-control" name="DC_TIPO_EQPT" type="text" id="DC_TIPO_EQPT">
                            </div>
                            <div class="col-md-6">
                                <label for="QT_MOTOR">Nº de motores</label>
                                <input class="form-control" name="QT_MOTOR" type="number" id="QT_MOTOR" min="0">
                            </div>
                            <div class="col-md-6">
                                <label for="IC_TIPO_PRPS">Tipo de propulsor</label>
                                <select class="form-control" name="IC_TIPO_PRPS" id="IC_TIPO_PRPS">
                                    <option value="M">M</option>
                                    <option value="R">R</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="QT_PSGR">Qtd. Passageiros</label>
                                <input class="form-control" name="QT_PSGR" type="number" id="QT_PSGR" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                        <button data-id="" type="button" class="eqpt-edit-submit  btn btn-primary">Editar</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- DELETE --}}
        <div class="modal fade " id="eqptDeleteModal" tabindex="-1" role="dialog" aria-labelledby="eqptDeleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="eqptDeleteModalLabel">Visualizando equipamento <strong
                                id="eqpt-delete-code">---</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h5>Deseja realmente apagar o equipamento <em id="eqpt-delete-code-em"></em>?</h5>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                        <button data-id="" type="button" class="eqpt-delete-submit  btn btn-danger">Sim, deletar</button>
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

            $('.eqpt-edit-submit').on('click', function() {
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
            $('.eqpt-delete').on('click', function() {
                console.log(10);
                const id = this.dataset.id;

                if (!id) {
                    toastr.warning('O código do equipamento não foi informado. Tente recarregar a página!');
                    return;
                }

                $('#eqpt-delete-code').html(id);
                $('#eqpt-delete-code-em').html(id);
                $('.eqpt-delete-submit').attr('data-id', id);

                $('#eqptDeleteModal').modal('show');
            });

            $('.eqpt-delete-submit').on('click', function() {
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
                        $('#eqptDeleteModal').modal('hide');
                        $(`tr[data-id=${id}]`).remove()

                        toastr.success(res);
                    },
                    error: err => {
                        console.log(err);
                        toastr.error(err.responseJSON);
                    }
                });
            });

            $('#eqptDeleteModal').on('hidden.bs.modal', function() {
                $('#eqpt-delete-code').html('');
                $('#eqpt-delete-code-em').html('');
                $('.eqpt-delete-submit').attr('data-id', '');
            });
            // EVENTOS RELACIONADOS COM O DELETE - END
        });
    </script>

@endpush
