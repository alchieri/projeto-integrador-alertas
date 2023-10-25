@extends('dashboard')
@section('content')
<div class="grid gap-6 mb-6 md:grid-cols-2">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Novo Compromisso</h2>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<form class="form" method="POST" action="{{ route('compromissos.create') }}">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-1">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="tipo">Tipo</label>
        <select class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" name="tipo">
            <option value="pontual">PONTUAL</option>
            <option value="recorrente">RECORRENTE</option>
            <option value="vencimento">VENCIMENTO</option>
        </select>
    <div>
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Nome:</label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="nome" id="nome" required></input>
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="descricao">Descrição</label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="descricao" id="descricao" required></input>
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="hora-inicio">Hora Início: </label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="tempo" id="tempo" required></input>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="hora-fim">Hora Fim: </label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="tempo" id="tempo"></input>
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="data-inicio">Data Início: </label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data" id="data" required></input>
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="hora-fim">Data Fim: </label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data" id="data"></input>
    </div>
        <input class="text-gray-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Salvar" />
        <input class="text-gray-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="reset" value="Cancelar" />
    </div>
</form>
    <div id="content-show">
        <h1>Teste</h1>
        @include('compromissos.show')
    <div>
</div>

@endsection