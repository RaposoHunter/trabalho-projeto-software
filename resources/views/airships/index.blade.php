@extends('layouts.main')

@section('title', 'Aeronaves')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Aeronaves</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('airships.create') }}"><button class="btn-default btn-green">Cadastrar</button></a>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">Cód. da Aeronave</th>
                        <th>Cód. da Compahnia Aérea</th>
                        <th>Cód. do Equipamento</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        @foreach ($airships as $airship)
                            <tr id="linha-{{$airship->CD_ARNV}}">
                                <td class="first-column">{{$airship->CD_ARNV}}</td>
                                <td>{{$airship->CMPN_AEREA}}</td>
                                <td>{{$airship->CD_EQPT}}</td>
                                <td class="last-column">
                                    <div class="d-flex justify-content-center">
                                        <button id="edit-{{ $airship->CD_ARNV }}" class="icon icon-edit" data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" form="delete_{{ $airship->CD_ARNV }}" class="icon icon-delete" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <form method="POST" action="{{ route('airships.destroy', $airship->CD_ARNV) }}"
                                            id="delete_{{ $airship->CD_ARNV }}" class="form-delete-client">
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
                        Deletar linha de Aeronaves
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar a Aeronave
                        <span id="delete-code-em"></span>?
                    </p>
                    <div class="btn-div d-flex justify-content-end">
                        <button type="button" class="delete-dismiss btn-default btn-red"
                            data-dismiss="modal">Cancelar</button>
                        <button  id="modal-button-delete" type="submit" class="delete-submit btn-default btn-blue ml-4">Deletar</button>
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
                        Editar tabela de Aeronaves
                    </h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" action="" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código da Aeronave</label>
                                <input class="register-input" name="CD_ARNV" type="text" placeholder="Insira o cód. da aeronave">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Cód. da companhia aérea</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="CMPN_AEREA">
                                        <option value="">Selecione o cód. da c. aérea</option>
                                        @foreach ($airlines->toQuery()->orderBy('CD_CMPN_AEREA')->get() as $airline)
                                            <option value="{{ $airline->CD_CMPN_AEREA }}">{{ $airline->CD_CMPN_AEREA }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código do Equipamento</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="CD_EQPT">
                                        <option value="">Selecione o cód. do equipamento</option>
                                        @foreach ($equipments->toQuery()->orderBy('CD_EQPT')->get() as $equipment)
                                            <option value="{{ $equipment->CD_EQPT }}">{{ $equipment->CD_EQPT }}</option>
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
                    url: '<?= asset('js/datatable.json') ?>'
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
                $('#edit-form').attr('action', "<?= route('airships.update', ['_id_']) ?>".replace('_id_',
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
