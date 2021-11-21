@extends('layouts.main')

@section('title', 'Cadastro de Companhias Aéreas')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Companhias Aéreas</h1>
        <div class="register-card blue-card">
            <form action="{{route('airlines.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Nome da Companhia</label>
                        <input class="register-input" type="text" name="NM_CMPN_AEREA" placeholder="Insira o nome da companhia">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código da Companhia</label>
                        <input class="register-input" type="text" name="CD_CMPN_AEREA" placeholder="Insira o código do país">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Códido do País</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_PAIS">
                                <option value="">Selecione o código do país</option>
                                @foreach ($countries->toQuery()->orderBy('NM_PAIS')->get() as $country)
                                    <option value="{{ $country->CD_PAIS }}">{{ $country->CD_PAIS }} - {{ $country->NM_PAIS }}</option>
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

