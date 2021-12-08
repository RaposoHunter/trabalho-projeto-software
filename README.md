## Aplicação Web para Gerenciamento de uma companhia aérea

<p>Software utilizado para o exercício prático dos conhecimentos adquiridos na disciplina de Projeto de Software da UFRRJ, ministrada pelo docente André Castro no período letivo de 2021.2.<p>
<p>A aplicação tem como objetivo permitir um maior controle logístico por parte de uma empresa aérea fictícia através da automação de processos de registros de passageiros, vôos, aeronaves, etc, além de permitir o levantamento de dados estatísticos sobre os registros para aplicações logísticas como: "quantos vôos são direcionados para um aeroporto específico", ou até mesmo à criação de programas de desconto/marketing para passageiros solteiros, por exemplo. Ao cliente, o sistema propõe entregar uma interface amigável e direta que permita a facilitação na marcação e/ou consulta de um histórico de vôos (passados ou agendados).</p>

### Alunos
* Victor de Oliveira Martins Azevedo - 20190018746 
* Pedro Raposo Felix de Sousa - 20190004642

### Ferramentas utilizadas
* HTML
* CSS
* JS
* PHP
* MySQL
* jQuery
* Bootstrap
* XAMPP
* <a href="https://keenthemes.com/metronic/">Metronic</a>
* <a href="https://laravel.com/">Laravel</a>

## Montando o Projeto

<ol>
    <li>Baixar o repositório</li>
    <li>Criar um banco de dados MySQL com o nome "projeto_software" (alterável)</li>
    <li>Abrir o arquivo</li>
    <li>Navegar até o diretório do aquivo pelo prompt de comando e rodar os comandos:
    </li>
    <li><code>copy .env.example .env</code></li>
    <li><code>composer install</code></li>
    <li><code>npm install</code></li>
    <li><code>php artisan key:generate</code></li>
    <li><code>php artisan config:cache</code></li>
    <li><code>php artisan migrate:fresh --seed</code></li>
</ol>

Ao final de todos estes passos o programa estará pronto para uso através da URL definida. <br>
Ex.: http://localhost/trabalho-projeto-software/

Aviso: A URL **pode** variar dependendo da configuração utilizada no XAMPP