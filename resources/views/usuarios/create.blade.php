@extends('dashboard')
@section('content')
<div class="grid gap-6 mb-6 md:grid-cols-2">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Novo Usuário</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <form class="form" method="POST" action="{{ route('usuarios.store') }}">
        @csrf

        <style>
            .botao {
        background-color: #3f3f43;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 10px;

      }

      .botao:hover {
        background-color: #201f29;
      }
        </style>
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>    
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="idade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Idade:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="number" name="idade" id="idade" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="tel" name="celular" id="celular" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password" name="password" id="password" required>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-6">
                <div>
                    <input class="botao" type="submit" value="Salvar">
                </div>
                <div>
                    <input class="botao" type="reset" value="Limpar">
                </div>
            </div>
        </div>
        
    </form>
    

    
@endsection