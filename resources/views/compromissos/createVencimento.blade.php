@extends('dashboard')
@section('content')

<div class="grid gap-1 mb-1 md:grid-cols-2">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastro de Novo Compromisso</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <form class="form" method="POST" action="{{ route('compromissos.store') }}">
            @csrf
            <div>
                <style>
                    .container {
                        position: relative;
                        width: auto;
                        border: 1px;
                        padding: 10px;
                    }
                    .tabela {
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        padding: 5px;
                        margin: 0;
                        
                    }

                    table {
                        width: 100%;
                        margin: 0 auto; /* Centraliza a tabela horizontalmente na div */
                    }

                    th {
                        padding: 10px;
                        text-align: center;
                    }
                    
                    #col2 {
                        padding: 5px;
                        text-align: right;
                    }
                    #col1 {
                        padding: 5px;
                        text-align: left;
                    }

                    #botao-direita {
                        position: absolute;
                        right: 0;
                        bottom: 0;
                        background-color: #3f3f43;
                        color: white;
                        padding: 10px 16px;
                        border: none;
                        cursor: pointer;
                        border-radius: 100px;
                    }
                    #botao-direita:hover {
                        background-color: #201f29;
                    }

                    .botao {
                        background-color: #3f3f43;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        cursor: pointer;
                        border-radius: 10px;

                    }

                    h2 {
                        font-weight: bold;
                    }

                    .botao:hover {
                        background-color: #201f29;
                    }
                </style>

                <div class="container">
                    <button style="border-radius:100px" id="botao-direita">+</button>
                </div>

                <div>    
                    <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo:</label>
                    <select class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" name="tipo">
                        <option value="pontual">PONTUAL</option>
                        <option value="recorrente">RECORRENTE</option>
                        <option value="vencimento">VENCIMENTO</option>
                    </select>
                </div>
                <div>
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição:</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="descricao" id="descricao" required>
                </div>

                    <div class="grid gap-6 mb-6 md:grid-cols-4">
                        

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                    <label for="vencimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vencimento:</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="vencimento" id="vencimento" required>
                    </div>
                </div>
                
                <div>
                    <button class="botao">Salvar</button>
                    <button class="botao">Cancelar</button>
                </div>
                

                            
        </form>
            </div>

    <div class="grid gap-1 mb-1 md:grid-cols-1">
        <div>    
            <!-- <h2 style="text-align: center"><strong>"Data selecionada no Calendário"</strong></h2><br> -->
            
            
            <div style="text-align: center">
                <h2><span id="day-placeholder"></span>   <span id="month-placeholder"></span>   <span id="year-placeholder"></span>  </h2><br>
            </div>
            
            

            <script>
                // Função para obter parâmetros da URL
                function getParameterByName(name, url) {
                    if (!url) url = window.location.href;
                    name = name.replace(/[\[\]]/g, "\\$&");
                    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                        results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                }

                // Mapeamento de números de mês para nomes de mês
                var monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

                // Obtém os valores dos parâmetros 'year', 'month' e 'day' da URL
                var yearFromURL = getParameterByName('year');
                var monthFromURL = getParameterByName('month');
                var dayFromURL = getParameterByName('day');
                var compromisso = getParameterByName('compromisso');
                console.log (compromisso);

                // Verifica se os valores foram passados e exibe-os nos elementos spans
                if (yearFromURL) {
                    document.getElementById('year-placeholder').textContent = yearFromURL;
                } else {
                    document.getElementById('year-placeholder').textContent = ' ';
                }

                if (monthFromURL) {
                    var monthNumber = parseInt(monthFromURL, 10);
                    if (!isNaN(monthNumber) && monthNumber >= 1 && monthNumber <= 12) {
                        document.getElementById('month-placeholder').textContent = monthNames[monthNumber - 1];
                    } else {
                        document.getElementById('month-placeholder').textContent = ' ';
                    }
                } else {
                    document.getElementById('month-placeholder').textContent = ' ';
                }

                if (dayFromURL) {
                    document.getElementById('day-placeholder').textContent = dayFromURL;
                } else {
                    document.getElementById('day-placeholder').textContent = ' ';
                }
                
            </script>
            <div class="tabela">
                <div style="text-align: center">
                    <table>
                    
                    <tr>
                        <td id="col1">Evento 1</td>
                        <td id="col2">12:00</td>
                    </tr>
                    <tr>
                        <td id="col1">Evento 2</td>
                        <td id="col2">17:00</td>
                    </tr>
                    <tr>
                        <td id="col1">Evento 3</td>
                        <td id="col2">21:00</td>
                    </tr>
                    <!-- Adicione mais linhas com dados conforme necessário -->
                    </table>
                </div>
            </div>
        </div>
    </div>
                
</div>


@endsection


