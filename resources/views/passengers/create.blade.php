{{-- importa a barra lateral e os scripts gerais --}}
@extends('layouts.main')

{{-- coloca o titulo da pagina atual --}}
@section('title', 'Passageiros | Novo')

{{-- conteudo da pagina com os inputs --}}
@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Passageiros</h1>

        <div class="register-card blue-card">
            <form action="{{route('passengers.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Nome</label>
                        <input class="register-input" name="NM_PSGR" type="text" placeholder="Insira o nome" value="{{ old('NM_PSGR') }}">
                        @error('NM_PSGR')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Sexo</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="IC_SEXO_PSGR">
                                <option value="">Selecione seu sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="O">Outros</option>
                            </select>
                        </div>
                        @error('IC_SEXO_PSGR')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Nascimento</label>
                        <input class="register-input date" name="DT_NASC_PSGR" type="text" placeholder="Insira a data de nascimento" value="{{ old('DT_NASC_PSGR') }}">
                        @error('DT_NASC_PSGR')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">País de Origem</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_PAIS">
                                <option value="">Selecione o país de origem</option>

                                @foreach ($countries->toQuery()->orderBy('CD_PAIS')->get() as $country)
                                    <option value="{{ $country->CD_PAIS }}">{{ $country->NM_PAIS }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('CD_PAIS')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Estado Cívil</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="IC_ESTD_CIVIL">
                                <option value="">Selecione o estado cívil</option>
                                <option value="S">Solteiro(a)</option>
                                <option value="C">Casado(a)</option>
                                {{-- <option value="">Separado(a)</option> --}}
                                {{-- <option value="">Divorciado(a)</option> --}}
                                {{-- <option value="">Viúvo(a)</option> --}}
                            </select>
                        </div>
                        @error('IC_ESTD_CIVIL')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Tem Responsável</label>
                        <div class="d-flex">
                            <div class="d-flex justify-content-center">
                                <label class="radio-container mr-1">
                                    <input class="radio-input" type="radio" name="has_responsible" value="0">
                                    <span class="radio-span"></span>
                                </label>
                                <div class="register-label ml-4">Não</div>
                            </div>
                            <div class="d-flex justify-content-center ml-5">
                                <label class="radio-container mr-1">
                                    <input class="radio-input" type="radio" name="has_responsible" value="1">
                                    <span class="radio-span"></span>
                                </label>
                                <div class="register-label ml-4">Sim</div>
                            </div>
                        </div>
                        <div id="responsible-div" class="my-2 my-md-4 collapse">
                            <label class="register-label" for="">Selecione o Responsável</label>
                            <div class="custom-select-2">
                                <select class="register-input" name="CD_PSGR_RESP">
                                    <option value="">Selecione o responsável</option>

                                    @foreach ($passengers->toQuery()->orderBy('NM_PSGR')->get() as $passenger)
                                        <option value="{{ $passenger->CD_PSGR }}">{{ $passenger->NM_PSGR }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('CD_PSGR_RESP')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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

{{-- codigo JS / jQuery --}}
@push('js')
    <script>
        $(function() {
            $('.custom-select-2').on('click', function() {
                $(this).find('.select-selected').addClass('select-item-black');
            });
            $('.radio-input').on('change', function() {
                if ($(this).val() == "1") {
                    $('#responsible-div').collapse('show')
                } else if ($(this).val() == "0") {
                    $('#responsible-div').collapse('hide')
                }
            });
            $('.date').mask('00/00/0000');
        });
    </script>

@endpush
