@extends('dashboard')
@section('content')

<div class="grid gap-4 mb-1 md:grid-cols-2">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastro de Novo Compromisso</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <form class="z  " method="POST" action="{{ route('compromissos.store') }}" novalidate>
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

                .selectHidden {
                    display : none;
                }
            </style>

            <div class="container">
                <button style="border-radius:100px" id="botao-direita">+</button>
            </div>

            <div>    
                <label for="selectTipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo:</label>
                <select id="selectTipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tipo">
                    <nav>
                        <option value=""></option>
                        <option value="option1">PONTUAL</option>
                        <option value="option2">RECORRENTE</option>
                        <option value="option3">VENCIMENTO</option>
                    </nav>
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

            <!-- Inicio do Create Pontual -->
            <div id="option1" class="selectHidden">
                <div class="grid gap-6 mb-6 md:grid-cols-4">
                    <div>
                        <label for="hora_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_inicio" id="hora_inicio" required>
                    </div>
                    <div>
                        <label for="hora_fim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora Fim:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_fim" id="hora_fim" required>
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="data_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_início" id="data_início" required>
                    </div>
                </div> 
            </div> 
            <!-- Final do Create Pontual -->




            
            <div id="option2" class="selectHidden">
                
                <div class="grid gap-6 mb-6 md:grid-cols-4">
                    <div>
                        <label for="hora_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_inicio" id="hora_inicio" required>
                    </div>
                    <div>
                        <label for="hora_fim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora Fim:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_fim" id="hora_fim" required>
                    </div>

                    <div class="col-span-2">
                        <label for="tipo_recorrencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Recorrência</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tipo_recorrencia" id="tipo_recorrencia">
                        <option value=""></option>
                        <option value="diario">Diário</option>
                        <option value="semanal">Semanal</option>
                        <option value="periodico">Periódico</option>
                        <option value="anual">Anual</option>
                        </select>
                    </div>
                </div>  
                
                <div class="grid gap-6 mb-6 md:grid-cols-4">
                    <div>
                        <label for="data_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_inicio" id="data_inicio" required>
                    </div>
                 
                    <div>
                        <label for="data_fim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Fim:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_fim" id="data_fim" required>
                    </div>

                    <div id="divPeriodico" class="col-span-2 selectHidden">
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div>
                                <input type="checkbox" id="seg"> 
                                <label for="seg">Segunda</label>
                            </div>
                            <div>
                                <input type="checkbox" id="ter"> 
                                <label for="ter">Terça</label>
                            </div>
                            <div>
                                <input type="checkbox" id="qua"> 
                                <label for="qua">Quarta</label> <br>
                            </div>
                        </div>
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div>
                                <input type="checkbox" id="qui"> 
                                <label for="qui">Quinta</label>
                            </div>
                            <div>
                                <input type="checkbox" id="sex"> 
                                <label for="sex">Sexta</label>
                            </div>
                            <div>
                                <input type="checkbox" id="sab"> 
                                <label for="sab">Sábado</label> <br>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" id="dom"> 
                            <label for="dom">Domingo</label>
                        </div>
                    </div>

                </div>

                

            </div>







            <!-- Inicio do Create Vencimento -->
            <div id="option3" class="selectHidden" disabled>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="valor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="valor" id="valor" required>
                    </div>
                    <div >
                    <label for="selecaorecorrencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Recorrência</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="selecaorecorrencia" id="selecaorecorrenciaVenc">
                            <option value="recorrencia"></option>
                            <option value="diario">Diário</option>
                            <option value="semanal">Semanal</option>
                            <option value="periodico">Periódico</option>
                            <option value="anual">Anual</option>
                            <option value="semrecorrencia">Sem Recorrência</option>
                        </select>
                        
                        
                    </div>

                    
                    <div>
                        <label for="vencimento" class="class=col-span-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vencimento:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="vencimento" id="vencimento" required>

                        
                    </div>
                    <div id="divPeriodicoVenc">
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div>
                                <input type="checkbox" id="segg"> 
                                <label for="segg">Segunda</label>
                            </div>
                            <div>
                                <input type="checkbox" id="terr"> 
                                <label for="terr">Terça</label>
                            </div>
                            <div>
                                <input type="checkbox" id="quaa"> 
                                <label for="quaa">Quarta</label> <br>
                            </div>
                        </div>
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div>
                                <input type="checkbox" id="quii"> 
                                <label for="quii">Quinta</label>
                            </div>
                            <div>
                                <input type="checkbox" id="sexx"> 
                                <label for="sexx">Sexta</label>
                            </div>
                            <div>
                                <input type="checkbox" id="sabb"> 
                                <label for="sabb">Sábado</label> <br>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" id="domm"> 
                            <label for="domm">Domingo</label>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Final do Create Vencimento -->

            <div>
                <button class="botao" type="submit" value="Salvar">Salvar</button>
                <button class="botao" type="reset" value="Limpar">Cancelar</button>
            </div>
        </div>
    </form>







    
    <div class="grid gap-1 mb-1 md:grid-cols-1">
        <div>    
            <!-- SEGUNDA COLUNA DA PAGINA-->
            
            
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
<script>
    const select = document.getElementById('selectTipo');
    const divs = document.querySelectorAll('div[id^="option"]');

    select.addEventListener('change', function(){
        divs.forEach(div => {
            div.classList.add('selectHidden');
        });
    
        const selectedOption = document.getElementById(select.value);
        if  (selectedOption){
            selectedOption.classList.remove('selectHidden');
        }
    });
</script>

<!-- selecaorecorrencia -->

<script>
    // Função para verificar a seleção do campo select e mostrar/ocultar a div "divPeriodico" conforme necessário
    function toggleDivPeriodico() {
        var selecaorecorrencia = document.getElementById("selecaorecorrencia");
        var divPeriodico = document.getElementById("divPeriodico");

        if (selecaorecorrencia.value === "periodico") {
            divPeriodico.style.display = "block";
        } else {
            divPeriodico.style.display = "none";
        }
    }

    // Adicione um ouvinte de evento para chamar a função quando o valor do select mudar
    var selecaorecorrencia = document.getElementById("selecaorecorrencia");
    selecaorecorrencia.addEventListener("change", toggleDivPeriodico);

    // Chame a função para configurar o estado inicial
    toggleDivPeriodico();
</script>

<script>
    // Função para mostrar/ocultar a div "divPeriodicoVenc" com base na seleção do campo select
    function toggleDivPeriodicoVenc() {
        var selecaorecorrenciaVenc = document.getElementById("selecaorecorrenciaVenc");
        var divPeriodicoVenc = document.getElementById("divPeriodicoVenc");

        if (selecaorecorrenciaVenc.value === "periodico") {
            divPeriodicoVenc.style.display = "block";
        } else {
            divPeriodicoVenc.style.display = "none";
        }
    }

    // Adicione um ouvinte de evento para chamar a função quando o valor do select mudar
    var selecaorecorrenciaVenc = document.getElementById("selecaorecorrenciaVenc");
    selecaorecorrenciaVenc.addEventListener("change", toggleDivPeriodicoVenc);

    // Chame a função para configurar o estado inicial
    toggleDivPeriodicoVenc();
</script>






@endsection