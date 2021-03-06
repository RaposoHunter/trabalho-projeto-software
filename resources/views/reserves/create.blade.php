{{-- importa a barra lateral e os scripts gerais --}}
@extends('layouts.main')

{{-- coloca o titulo da pagina atual --}}
@section('title', 'Cadastro de Reservas')

{{-- conteudo da pagina com os inputs --}}
@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Reservas</h1>

        <div class="register-card blue-card">
            <form action="{{ route('reserves.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="CD_PSGR">Passageiro</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="CD_PSGR">
                                <option value="">Selecione o passageiro</option>
                                @foreach ($passengers as $passenger)
                                    <option value="{{ $passenger->CD_PSGR }}">{{ $passenger->CD_PSGR }} - {{ $passenger->NM_PSGR }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="NR_VOO">N° do Voo</label>
                        <div class="custom-select-2">
                            <select class="register-input" name="NR_VOO">
                                <option value="">Selecione o número do voo</option>
                                @foreach ($flights as $flight)
                                    <option value="{{ $flight->NR_VOO }}">{{ $flight->NR_VOO }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="DT_SAIDA_VOO">Data de Saída</label>
                        <input class="register-input date" type="text" name="DT_SAIDA_VOO" placeholder="Insira a data de saída">
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

{{-- codigo JS / jQuery --}}
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
