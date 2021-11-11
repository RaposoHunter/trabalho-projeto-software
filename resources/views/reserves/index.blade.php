@extends('layouts.main')

@section('title', 'Reservas')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Reservas</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('reserves.create') }}">
                <button class="btn-default btn-green">Cadastrar</button>
            </a>
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
                            <tr>
                                <td class="first-column">{{$reserves->CD_PSGR}}</td>
                                <td>{{$reserves->NR_VOO}}</td>
                                <td>{{$reserves->DT_SAIDA_VOO}}</td>
                                <td>{{$reserves->PC_DESC_PASG}}</td>
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
                        Deletar linha de Reservas
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar a Reserva
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
                        Editar tabela de Reservas
                    </h5>
                </div>

                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Código do Passageiro</label>
                                <input class="register-input" type="text" placeholder="Insira o código do passageiro">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">N° do Voo</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="">
                                        <option value="">Selecione o número do voo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Outros</option>
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
                    url: 'http://projeto.software/js/datatable.json'
                }
            });
            $('.delete-dismiss').on('click', function() {
                $('#deleteModal').modal('hide');
            });
        });
    </script>

@endpush
