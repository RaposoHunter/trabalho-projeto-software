<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} | Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        
        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
            }

            td {
                text-align: center;
            }

            #sidebar ul {
                list-style-type: none;
                padding: 0;
            }

            .sidebar-link {
                cursor: pointer;
                width: 15%;
                min-width: 129px;
                padding: 0.5em;
            }

            .sidebar-link:hover {
                background: rgb(245, 245, 245);
            }
        </style>
    </head>
    <body>
        <div id="sidebar">
            <ul>
                <li data-id="home" class="sidebar-link">Home</li>
                <li data-id="usuarios" class="sidebar-link">Usuários</li>
                <li data-id="passageiros" class="sidebar-link">Passageiros</li>
                <li data-id="voos" class="sidebar-link">Vôos</li>
                <li data-id="aeroportos" class="sidebar-link">Aeroportos</li>
                <li data-id="aeronaves" class="sidebar-link">Aeronaves</li>
                <li data-id="companhias-aereas" class="sidebar-link">C. Aéreas</li>
                <li data-id="paises" class="sidebar-link">Países</li>
                <li data-id="estados" class="sidebar-link">UFs</li>
                <li data-id="equipamentos" class="sidebar-link">Equipamentos</li>
                <li data-id="rotas-de-voo" class="sidebar-link">Rotas de Vôo</li>
                <li data-id="reservas" class="sidebar-link">Reservas</li>
            </ul>
        </div>

        <div id="container" class="content">
            @include('home')
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(function () {
            // NOTE: Pensar em usar o carregamento da pagina por AJAX como em Single-Page Applications
            
            $('.sidebar-link').on('click', function () {
                const page = this.dataset.id;

                $.ajax({
                    method: 'GET',
                    url: `/${page}`,
                    success: res => {
                        toastr.clear();

                        $('.vb-event-container').unbind();
                        $('#container').html(res);
                    },

                    error: err => {
                        toastr.clear();
                        if(err.status == 404) {
                            toastr.error('Desculpe, a página que você requisitou não existe! Tente atualizar a página.');
                        } else {
                            console.log(err);
                            toastr.error('Desculpe, algo deu errado. Tente novamente mais tarde!');
                        }
                    },
                })
            });
        });
    </script>
</html>