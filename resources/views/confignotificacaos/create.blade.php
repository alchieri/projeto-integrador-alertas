@extends('dashboard')
@section('content')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastrar Nova Configuração de Notificação</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <form class="form" method="POST" action="{{ route('confignotificacaos.store') }}">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="descricao" id="descricao" required>
            </div>
            <div>
                <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="tipo" id="tipo" required>
            </div>
            <div>
                <label for="data_notificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="data_notificacao" id="data_notificacao" required>
            </div>
            <div>
                <label for="hora_notificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="time" name="hora_notificacao" id="hora_notificacao" required>
            </div>
            <div>
                <input class="text-gray-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Salvar">
            </div>
            <div>
                <input class="text-gray-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="reset" value="Limpar">
            </div>
        </div>
    </form>
@endsection