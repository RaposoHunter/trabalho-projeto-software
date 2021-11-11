@extends('layouts.main')

@section('title', 'Cadastro de Voo')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Voo</h1>

        <div class="register-card blue-card">
            <form action="{{route('flights.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">N° do Voo</label>
                        <input class="register-input" name="NR_VOO" type="text" placeholder="Insira o número do voo">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">N° da Rota</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="NR_ROTA_VOO">
                                <option value="">Selecione o número da rota</option>
                                <option value="1">teste</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código da Aeronave</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_ARNV">
                                <option value="">Selecione o código da aeronave</option>
                                <option value="1">teste</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Data de Saída</label>
                        <input class="register-input date" type="text" name="DT_SAIDA_VOO" placeholder="Insira a data de saída">
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

