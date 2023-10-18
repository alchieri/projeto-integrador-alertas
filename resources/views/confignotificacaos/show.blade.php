@extends('dashboard')
@section('content')
    @if(isset($msg))
        <h3 style="color: red;">Config não encontrada!</h3>
    @else
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mostrando dados da Configuração de Notificação</h2>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Descrição:</strong> {{ $confignotificacao->descricao }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Tipo:</strong> {{ $confignotificacao->tipo }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Data:</strong> {{ $confignotificacao->data_notificacao }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Hora:</strong> {{ $confignotificacao->hora_notificacao }} </p>
        <a class="underline decoration-transparent transition duration-300 ease-in-out hover:decoration-inherit" href="{{ route('confignotificacaos.index') }}">Voltar</a>
    @endif
@endsection