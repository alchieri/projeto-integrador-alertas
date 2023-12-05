@extends('dashboard')
@section('content')

<div class="grid gap-4 mb-1 md:grid-cols-2">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastro de Novo Compromisso</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <form class="form" method="POST" action="{{ route('compromissos.store') }}" novalidate>
        @csrf
        <div>
            <div class="container">
                <button id="botao-direita" class="botao" type="reset" value="Limpar">+</button>
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

            <div class="invisivel">
                <input name="id" id="id"></input>
            </div>

            <!-- Inicio do Create Pontual -->
            <div id="option1" class="selectHidden">
                <div class="grid gap-6 mb-6 md:grid-cols-4">
                    <div>
                        <label for="hora_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_inicio_pontual" id="hora_inicio_pontual" required>
                    </div>
                    <div>
                        <label for="hora_fim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora Fim:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_fim" id="hora_fim" required>
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="data_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_inicio_pontual" id="data_inicio_pontual" required>
                    </div>
                </div> 
            </div> 
            <!-- Final do Create Pontual -->
            <!-- Inicio do Create Recorrente -->
            <div id="option2" class="selectHidden">
                
                <div class="grid gap-6 mb-6 md:grid-cols-4">
                    <div>
                        <label for="hora_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_inicio_recorrente" id="hora_inicio_recorrente" required>
                    </div>
                    <div>
                        <label for="hora_fim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora Fim:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_fim" id="hora_fim" required>
                    </div>

                    <div class="col-span-2">
                        <label for="tipo_recorrencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Recorrência</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tipo_recorrencia_recorrente" id="tipo_recorrencia_recorrente">
                            <option value="recorrencia"></option>
                            <option value="diario">Diário</option>
                            <option value="semanal">Semanal</option>
                            <option value="mensa">Mensal</option>
                            <option value="anual">Anual</option>
                            <option value="periodico">Periódico</option>
                        </select>
                    </div>
                </div>  
                
                <div class="grid gap-6 mb-6 md:grid-cols-4">
                    <div>
                        <label for="data_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Início:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_inicio_recorrente" id="data_inicio_recorrente" required>
                    </div>
                 
                    <div>
                        <label for="data_fim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data Fim:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_fim" id="data_fim" required>
                    </div>

                    <div id="divPeriodico" class="col-span-2 selectHidden">
                    <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div><input type="checkbox" id="seg"> <label for="seg">Segunda</label> </div>
                            <div><input type="checkbox" id="ter"> <label for="ter">Terça</label> </div>
                            <div><input type="checkbox" id="quaa"> <label for="qua">Quarta</label> <br> </div>  
                        </div>
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div> <input type="checkbox" id="qui"> <label for="qui">Quinta</label> </div>
                            <div> <input type="checkbox" id="sex"> <label for="sex">Sexta</label> </div>
                            <div> <input type="checkbox" id="sab"> <label for="sab">Sábado</label> <br> </div>
                        </div>
                        <div> <input type="checkbox" id="dom"> <label for="dom">Domingo</label> </div>
                    </div>
                </div>
            </div>
            <!-- Final do Create Recorrente -->


            <!-- Inicio do Create Vencimento -->
            <div id="option3" class="selectHidden" disabled>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="valor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="valor" id="valor" required>
                    </div>
                    <div >
                    <label for="tipo_recorrencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Recorrência</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tipo_recorrencia" id="selecaorecorrenciaVenc">
                            <option value="recorrencia"></option>
                            <option value="diario">Diário</option>
                            <option value="semanal">Semanal</option>
                            <option value="mensa">Mensal</option>
                            <option value="anual">Anual</option>
                            <option value="periodico">Periódico</option>
                        </select> 
                    </div>

                    <div>
                        <label for="vencimento" class="class=col-span-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vencimento:</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="vencimento" id="vencimento" required>
                    </div>

                    <div id="divPeriodicoVenc">
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div><input type="checkbox" id="segg"> <label for="segg">Segunda</label> </div>
                            <div><input type="checkbox" id="terr"> <label for="terr">Terça</label> </div>
                            <div><input type="checkbox" id="quaa"> <label for="quaa">Quarta</label> <br> </div>  
                        </div>
                        <div class="grid gap-2 mb-1 md:grid-cols-3">
                            <div> <input type="checkbox" id="quii"> <label for="quii">Quinta</label> </div>
                            <div> <input type="checkbox" id="sexx"> <label for="sexx">Sexta</label> </div>
                            <div> <input type="checkbox" id="sabb"> <label for="sabb">Sábado</label> <br> </div>
                        </div>
                        <div> <input type="checkbox" id="domm"> <label for="domm">Domingo</label> </div>
                    </div>
                </div>
            </div>    
            <!-- Final do Create Vencimento -->
                
            <div> <br>
                <div id="selecaoBotao">
                    <button class="botao" type="submit" value="Salvar">Salvar</button>
                    <button id="botaoCancelar" class="botao" type="reset" value="Limpar">Cancelar</button>
                    <button id="botaoExcluir" class="botao" name="delete" type="submit" value="Delete" style= "display: none">Excluir</button>
                </div>
            </div>
        </div>
    </form>
    
    
    <div id="coluna2" class="grid gap-1 mb-1 md:grid-cols-1">
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
                //var compromisso = getParameterByName('compromisso');
                //console.log (compromisso);

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
                    <table id="table_compromissos" name="table_compromissos">
                    @if ($compromissos != null)
                        @foreach ($compromissos as $u)
                        <tr class="spnDetails">

                                <td class="invisivel">
                                    {{ strtoupper($u->tipo) }} 
                                </td>
                                <td class="invisivel">
                                    {{ $u->nome }} 
                                </td>
                                <td class="invisivel">
                                    {{ $u->descricao }} 
                                </td>
                                <td class="invisivel">
                                    {{ $u->id }}
                                </td>

                                <td class="px-6 py-4 spnDetails">{{ $u->descricao }}
                                    <span class="spnTooltip">
                                        <strong>{{ strtoupper($u->tipo) }}</strong><br />
                                        @if ($u->descricao != null )
                                        <strong>Descrição:</strong> {{ $u->descricao }} <br>
                                    @endif
                                    @if ($u->hora_inicio != null ) 
                                    <strong>Hora Início:</strong> {{ $u->hora_inicio }} <br>
                                    @endif
                                    @if ($u->hora_fim != null ) 
                                        <strong>Hora Fim:</strong> {{ $u->hora_fim }} <br>
                                        @endif
                                        @if ($u->data_inicio != null ) 
                                        <strong>Data Início:</strong> {{ date("d-m-Y", strtotime($u->data_inicio)) }} <br>
                                        @endif
                                        @if ($u->data_fim != null ) 
                                        <strong>Data Fim:</strong> {{ date("d-m-Y", strtotime($u->data_fim)) }} <br>
                                        @endif
                                        @if ($u->valor != null ) 
                                        <strong>Valor: R$ </strong> {{ $u->valor }} <br>
                                        @endif
                                    </span>
                                </td>
                                @if ($u->tipo === "vencimento" ) 
                                <td class="px-6 py-4 spnDetails"> {{ $u->valor }} </td>
                                @else 
                                <td class="px-6 py-4 spnDetails"> {{ $u->hora_inicio }} </td>
                                @endif
                                <td id="excluirCompromisso">
                                    <button onclick="excluir()" for="excluir" id="excluir" name="excluir" type="submit" value="delete">Excluir</button>
                                </td>
                            </tr>
                            @endforeach
                            
                            @endif
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function selectTipo() {
        const select = document.getElementById('selectTipo');
        const divs = document.querySelectorAll('div[id^="option"]');
    
        divs.forEach(div => {
            div.classList.add('selectHidden');
        });
    
        const selectedOption = document.getElementById(select.value);
        if  (selectedOption){
            selectedOption.classList.remove('selectHidden');
        }
    }

    // Adicione um ouvinte de evento para chamar a função quando o valor do select mudar
    var selecaoTipo = document.getElementById("selectTipo");
    selecaoTipo.addEventListener("change", selectTipo);

    // Chame a função para configurar o estado inicial
    selectTipo();
</script>

<!-- tipo_recorrencia -->

<script>
    // Função para mostrar/ocultar a div "divPeriodico" com base na seleção do campo select
    function toggleDivPeriodico() {
        var selecaoRecorrencia = document.getElementById("tipo_recorrencia_recorrente");
        var divPeriodico = document.getElementById("divPeriodico");

        if (selecaoRecorrencia.value === "periodico") {
            divPeriodico.style.display = "block";
        } else {
            divPeriodico.style.display = "none";
        }
    }

    // Adicione um ouvinte de evento para chamar a função quando o valor do select mudar
    var selecaoRecorrencia = document.getElementById("tipo_recorrencia_recorrente");
    selecaoRecorrencia.addEventListener("change", toggleDivPeriodico);

    // Chame a função para configurar o estado inicial
    toggleDivPeriodico();
</script>
 

<script>
    // Função para mostrar/ocultar a div "divPeriodicoVenc" com base na seleção do campo select
    function toggleDivPeriodicoVenc() {
        var selecaoRecorrenciaVenc = document.getElementById("selecaorecorrenciaVenc");
        var divPeriodicoVenc = document.getElementById("divPeriodicoVenc");

        if (selecaoRecorrenciaVenc.value === "periodico") {
            divPeriodicoVenc.style.display = "block";
        } else {
            divPeriodicoVenc.style.display = "none";
        }
    }

    // Adicione um ouvinte de evento para chamar a função quando o valor do select mudar
    var selecaoRecorrenciaVenc = document.getElementById("selecaorecorrenciaVenc");
    selecaoRecorrenciaVenc.addEventListener("change", toggleDivPeriodicoVenc);

    // Chame a função para configurar o estado inicial
    toggleDivPeriodicoVenc();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var tabelaCompromissos = document.getElementById("table_compromissos");
        var detalheTipo = document.getElementById("selectTipo");
        var detalheNome = document.getElementById("nome");
        var detalheDescricao = document.getElementById("descricao");
        var detalheId = document.getElementById("id");
        var botaoCancelar = document.getElementById("botaoCancelar");
        var botaoExcluir = document.getElementById("botaoExcluir");
        var valueTipo = "";

        tabelaCompromissos.addEventListener("click", function (event) {
            if (event.target.tagName === "TD") {
                var linha = event.target.parentNode;
                var cells = linha.getElementsByTagName("td");
                var camposInvisiveis = linha.querySelectorAll(".invisivel");
                botaoCancelar.style.display ="none";
                botaoExcluir.style.display ="inline";

                camposInvisiveis.forEach(function(campo, index) {
                    switch (index) {
                        case 0:
                            valueTipo = campo.textContent || campo.innerText;
                            break;
                    }
                });

                // If para preencher o campo tipo
                if (valueTipo.trim() === "PONTUAL") {
                    detalheTipo.options[1].selected = true;
                } else if (valueTipo.trim() === "RECORRENTE") {
                    detalheTipo.options[2].selected = true;
                } else {
                    detalheTipo.options[3].selected = true;
                }
                selectTipo();
                
                detalheNome.value = cells[1].innerText.trim();
                detalheDescricao.value = cells[2].innerText.trim();
                detalheId.value = cells[3].innerText.trim();
            }
        });
    });
</script>

<script>
    function excluir(){
    const nome = document.querySelectorAll("excluir");
    
        //btn.addEventListener("click", function(){
        // Obtem o id do compromisso.
        var id = document.getElementById('id').value;

        // Cria uma nova solicitação HTTP
        const request = new XMLHttpRequest();
        request.open('DELETE', `/compromissos/${id}`);

        // Envia a solicitação
        request.send();

        // Escuta a resposta da solicitação
        request.onload = () => {
        // Se a solicitação foi bem-sucedida (200), atualiza a interface dos compromissos.
        if (request.status === 200) {
            alert('Compromisso excluído com sucesso!');
            }
        };
    }
</script>

@endsection