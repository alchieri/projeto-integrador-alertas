@extends('dashboard')
@section('content')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Configurações de Notificações Cadastradas</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <a href="/confignotificacaos/create" class="text-gray-900 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</a>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    @if(!isset($confignotificacaos))
        <h3 style="color: red;">Nenhum registro encontrado!</h3>
    @else
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Descrição</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                    <th scope="col" class="px-6 py-3">Data</th>
                    <th scope="col" class="px-6 py-3">Hora</th>
                    <th scope="col" colspan="2" class="px-6 py-3">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($confignotificacaos as $c)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $c->descricao }}</td>
                        <td class="px-6 py-4">{{ $c->tipo }}</td>
                        <td class="px-6 py-4">{{ $c->data_notificacao }}</td>
                        <td class="px-6 py-4">{{ $c->hora_notificacao }}</td>
                        <td class="px-6 py-4 text-right"><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('confignotificacaos.show', $c->id) }}">Exibir</a></td>
                        <td class="px-6 py-4 text-right"><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('confignotificacaos.edit', $c->id) }}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900 dark:text-white">
                    <td class="px-6 py-3" colspan="6">Config cadastradas: {{ $confignotificacaos->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection