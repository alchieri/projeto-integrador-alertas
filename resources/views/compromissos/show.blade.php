@extends('compromissos.create')
@section('content-show')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mostrando dados do usuário</h2>
@if(isset($msg))
        <h3 style="color: red;">Compromisso não encontrado!</h3>
    @else
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mostrando dados do usuário</h2>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Tipo:</strong> {{ $compromisso->tipo }} </p>
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Nome:</strong> {{ $compromisso->nome }} </p>
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Descrição:</strong> {{ $compromisso->descricao }} </p>
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Hora-Início:</strong> {{ $compromisso->hora_inicio }} </p>
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Hora-Fim:</strong> {{ $compromisso->hora_fim }} </p>
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Data-Início:</strong> {{ $compromisso->data_inicio }} </p>
            <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Data-Fim:</strong> {{ $compromisso->data_fim }} </p>
        </div>    
    @endif
@endsection