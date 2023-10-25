<h2 class="font-semibold text-xl text-gray-800 leading-tight">Mostrando dados do usuário</h2>
@if(isset($msg))
    <h3 style="color: red;">Compromisso não encontrado!</h3>
@else
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mostrando dados do usuário</h2>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Nome:</strong> {{ $compromisso->nome }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Hora-Início:</strong> {{ $compromisso->hora_inicio }} </p>
    </div>    
@endif