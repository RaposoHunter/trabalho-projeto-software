{{-- importa a barra lateral e os scripts gerais --}}
@extends('layouts.main')

{{-- coloca o titulo da pagina atual --}}
@section('title', 'Voos | Novo')

{{-- conteudo da pagina com os inputs --}}
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
                        @error('NR_VOO')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">N° da Rota</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="NR_ROTA_VOO">
                                <option value="">Selecione o número da rota</option>
                                @foreach($flight_routes as $flight_route)
                                    <option value="{{ $flight_route->NR_ROTA_VOO }}">{{ $flight_route->NR_ROTA_VOO }} - {{ $flight_route->CD_ARPT_ORIG }} -> {{ $flight_route->CD_ARPT_DEST }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('NR_ROTA_VOO')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código da Aeronave</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_ARNV">
                                <option value="">Selecione o código da aeronave</option>
                                @foreach($airships as $airship)
                                    <option value="{{ $airship->CD_ARNV }}">{{ $airship->CD_ARNV }}</option>
                                @endforeach

                            </select>
                        </div>
                        @error('CD_ARNV')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Data de Saída</label>
                        <input class="register-input date" type="text" name="DT_SAIDA_VOO" placeholder="Insira a data de saída">
                        @error('DT_SAIDA_VOO')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
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

