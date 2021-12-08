{{-- importa a barra lateral e os scripts gerais --}}
@extends('layouts.main')

{{-- coloca o titulo da pagina atual --}}
@section('title', 'Países | Novo')

{{-- conteudo da pagina com os inputs --}}
@section('container')
    <div class="main-container">
        <h1 class="page-title">Cadastro de Países</h1>

        <div class="register-card blue-card">
            <form action="{{ route('countries.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="CD_PAIS">Código do País</label>
                        <input class="register-input" name="CD_PAIS" type="text" placeholder="Insira o código do país">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="NM_PAIS">Nome do País</label>
                        <input class="register-input" name="NM_PAIS" type="text" placeholder="Insira o nome do país">
                    </div>
                    <div class="col-md-6 px-5 my-2 my-md-4">
                        <label class="register-label" for="QT_PPLC_PAIS">População do País</label>
                        <input class="register-input" name="QT_PPLC_PAIS" type="text" placeholder="Insira a população do país">
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

