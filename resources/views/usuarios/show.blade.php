@extends('dashboard')
@section('content')
    @if(isset($msg))
        <h3 style="color: red;">Usuário não encontrado!</h3>
    @else
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mostrando dados do usuário</h2>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Nome:</strong> {{ $usuario->nome }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Idade:</strong> {{ $usuario->idade }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>E-mail:</strong> {{ $usuario->email }} </p>
        <p class="mb-3 text-gray-500 dark:text-gray-400"><strong>Celular:</strong> {{ $usuario->celular }} </p>
        <a class="underline decoration-transparent transition duration-300 ease-in-out hover:decoration-inherit" href="{{ route('usuarios.index') }}">Voltar</a>
    @endif
@endsection