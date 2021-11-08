@extends('layouts.main')

@section('title', 'Passageiros')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Passageiros</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('passengers.create') }}"><button class="btn-default btn-green mr-4">Cadastrar</button></a>
            <button class="btn-default btn-blue ml-2 mr-1" data-toggle="modal" data-target="#filterModal">Filtrar</button>
        </div>

        <div class="main-card blue-card">
            <div class="table-responsive">
                <table id="table-id" class="table table-stripped dt-bootstrap5">
                    <thead>
                        <th class="first-column">Cód.</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Nascimento</th>
                        <th>Cód. País</th>
                        <th>E. Cívil</th>
                        <th>Responsável</th>
                        <th class="last-column">Ações</th>
                    </thead>
                    <tbody>
                        <td class="first-column">01</td>
                        <td>Victor de Oliveira</td>
                        <td>M</td>
                        <td>28/12/2000</td>
                        <td>18</td>
                        <td>Solteiro</td>
                        <td>Não</td>
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
                        Deletar linha de Passageiros
                    </h5>
                </div>

                <div class="modal-body">
                    <p class="modal-text">
                        Deseja realmente deletar o Passageiro
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
    {{-- FILTRAR --}}
    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-default">
                <div class="modal-header-default text-white">
                    <h5 class="modal-title" id="filterModalLabel">
                        Filtrar tabela de Passageiros
                    </h5>
                </div>

                <div class="modal-body">

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
                        Editar tabela de Passageiros
                    </h5>
                </div>

                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Nome</label>
                                <input class="register-input" type="text" placeholder="Insira o nome">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Sexo</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="">
                                        <option value="">Selecione seu sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Outros</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Nascimento</label>
                                <input class="register-input date" type="text" placeholder="Insira a data de nascimento">
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">País de Origem</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="">
                                        <option value="">Selecione o país de origem</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Estado Cívil</label>
                                <div class="custom-select-2">
                                    <select class="register-input" name="">
                                        <option value="">Selecione o estado cívil</option>
                                        <option value="">Solteiro(a)</option>
                                        <option value="">Casado(a)</option>
                                        <option value="">Separado(a)</option>
                                        <option value="">Divorciado(a)</option>
                                        <option value="">Viúvo(a)</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 px-5 my-2 my-md-4">
                                <label class="register-label" for="">Tem Responsável</label>
                                <div class="d-flex">
                                    <div class="d-flex justify-content-center">
                                        <label class="radio-container mr-1">
                                            <input class="radio-input" type="radio" name="responsible" value="0">
                                            <span class="radio-span"></span>
                                        </label>
                                        <div class="register-label ml-4">Não</div>
                                    </div>
                                    <div class="d-flex justify-content-center ml-5">
                                        <label class="radio-container mr-1">
                                            <input class="radio-input" type="radio" name="responsible" value="1">
                                            <span class="radio-span"></span>
                                        </label>
                                        <div class="register-label ml-4">Sim</div>
                                    </div>
                                </div>
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
                $('#deleteModal').modal('hide')
            })
        });
    </script>

@endpush
