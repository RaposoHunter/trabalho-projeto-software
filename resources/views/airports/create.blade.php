@extends('layouts.main')

@section('title', 'Cadastro de Aeroportos')

@push('css')

@endpush

@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Aeroportos</h1>

        <div class="register-card blue-card">
            <form action="{{route('airports.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do Aeroporto</label>
                        <input class="register-input" type="text" name="CD_ARPT" placeholder="Insira o código do aeroporto">
                        @error('CD_ARPT')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Código do País</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_PAIS">
                                <option value="">Selecione o código do país</option>
                                @foreach ($countries->toQuery()->orderBy('NM_PAIS')->get() as $country)
                                    <option value="{{ $country->CD_PAIS }}">{{ $country->CD_PAIS }} - {{ $country->NM_PAIS }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Unidade Federativa</label>
                        <div id="select-uf" class="custom-select-2">
                            <select class="register-input" name="SG_UF" disabled>
                                <option value="">Selecione sua unidade federativa</option>
                                @foreach ($states->toQuery()->orderBy('SG_UF')->get() as $state)
                                    <option value="{{ $state->SG_UF }}">{{ $state->NM_UF }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="">Nome da Cidade</label>
                        <input class="register-input" type="text" name="NM_CIDD" placeholder="Insira o nome da cidade">
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

            // FIXME: RPD, fazer funcionar esse evento além de tirar o disabled do select quando o usuário selecionar o Brasil
            $('#select-uf>.select-selected').on('click', function (e) {
                if($('select[name=SG_UF]').prop('disabled')) {
                    new popupAlert('Selecione Brasil como país antes de selecionar uma UF', 2, 3000).create();
                    e.preventDefault();
                    return;
                }
            });
        });
    </script>

@endpush

