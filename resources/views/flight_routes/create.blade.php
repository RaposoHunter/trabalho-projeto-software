@extends('layouts.main')

@section('title', 'Cadastro de Rotas de Voos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Rotas de Voos</h1>

        <div class="register-card blue-card">
            <form action="{{route('flightroutes.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do Aeroporto de Origem</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_ARPT_ORIG">
                                <option value="">Selecione o código do aeroporto de origem</option>
                                @foreach ($airports as $airport)
                                    <option value="{{ $airport->CD_ARPT }}">{{ $airport->CD_ARPT }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do Aeroporto de Destino</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_ARPT_DEST">
                                <option value="">Selecione o código do aeroporto de destino</option>
                                @foreach ($airports as $airport)
                                    <option value="{{ $airport->CD_ARPT }}">{{ $airport->CD_ARPT }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Valor da Passagem</label>
                        <input class="register-input" type="text" name="VR_PASG" placeholder="Insira o código do aeroporto de origem">
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

