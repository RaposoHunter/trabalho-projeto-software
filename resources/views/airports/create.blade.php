@extends('layouts.main')

@section('title', 'Cadastro de Aeroportos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Aeroportos</h1>

        <div class="register-card blue-card">
            <form action="">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código da Aeroporto</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="">
                                <option value="">Selecione o código do país</option>
                                <option value="M">xd</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do País</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="">
                                <option value="">Selecione o código do país</option>
                                <option value="O">xd</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Unidade Federativa</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="">
                                <option value="">Selecione sua unidade federativa</option>
                                <option value="O">xd</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Cidade</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="">
                                <option value="">Selecione a Cidade</option>
                                <option value="O">xd</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="reset" class="btn-default btn-blue ml-2 mr-4">Limpar</button>
                    <button type="submit" class="btn-default btn-green ml-2 mr-5">Cadastrar</button>
                </div>
            </form>
        </div>


    </div>
@endsection

@push('js')
    <script>
        $(function() {
            $('.custom-select-2').on('click', function() {
                $(this).find('.select-selected').addClass('select-item-black');
            });
            $('.date').mask('00/00/0000');
        });
    </script>

@endpush

