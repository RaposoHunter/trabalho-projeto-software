@extends('layouts.main')

@section('title', 'Equipamentos | Novo')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        <h1 class="page-title">Cadastro de Equipamentos</h1>

        <div class="register-card blue-card">
            <form action="{{ route('equipments.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Nome do Equipamento</label>
                        <input class="register-input" name="NM_EQPT" type="text" placeholder="Insira o nome do equipamento">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do Equipamento</label>
                        <input class="register-input" name="CD_EQPT" type="text" placeholder="Insira o código do equipamento">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Selecione o Tipo do Equipamento</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="IC_TIPO_PRPS">
                                <option value="">Selecione o tipo do equipamento</option>
                                <option value="M">M</option>
                                <option value="R">R</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Descrição do Tipo</label>
                        <input class="register-input" name="DC_TIPO_EQPT" type="text" placeholder="Insira a descrição do tipo">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Quantidade de Passageiros</label>
                        <input class="register-input" name="QT_PSGR" type="text" placeholder="Insira a quantidade de passageiros">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Quantidade de Motores</label>
                        <input class="register-input" name="QT_MOTOR" type="text" placeholder="Insira a quantidade de motores">
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
        });
    </script>

@endpush

