{{-- importa a barra lateral e os scripts gerais --}}
@extends('layouts.main')

{{-- coloca o titulo da pagina atual --}}
@section('title', 'Cadastro de Aeronaves')

{{-- conteudo da pagina com os inputs --}}
@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Aeronaves</h1>

        @foreach ($errors->all() as $msg)
            {{ $msg }}
        @endforeach

        <div class="register-card blue-card">
            <form action="{{ route('airships.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="CD_ARNV">Código da Aeronave</label>
                        <input class="register-input" type="text" name="CD_ARNV" placeholder="Insira o código da aeronave" style="text-transform: uppercase">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código da Companhia Aérea</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_CMPN_AEREA">
                                <option value="">Selecione código da companhia aérea</option>
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
                                <option value="">Selecione código do equipamento</option>
                                @foreach ($equipments->toQuery()->orderBy('CD_EQPT')->get() as $equipment)
                                    <option value="{{ $equipment->CD_EQPT }}">{{ $equipment->CD_EQPT }}</option>
                                @endforeach
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

{{-- codigo JS / jQuery --}}
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
