@extends('layouts.main')

@section('title', 'Cadastro de Reservas')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Reservas</h1>

        <div class="register-card blue-card">
            <form action="">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do Passageiro</label>
                        <input class="register-input" name="CD_PSGR" type="text" placeholder="Insira o código do passageiro">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">N° do Voo</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="NR_VOO">
                                <option value="">Selecione o número do voo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="O">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Data de Saída</label>
                        <input class="register-input" type="text" name="DT_SAIDA_VOO" placeholder="Insira a data de saída">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Desconto da Passagem</label>
                        <input class="register-input descount" type="text" name="PC_DESC_PASG" placeholder="Insira o desconto da passagem">
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
            $('.descount').mask('99');
        });
    </script>

@endpush
