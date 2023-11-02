@extends('dashboard')
@section('content')

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
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuários Cadastrados</h2>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <a href="/usuarios/create" class="botao">Cadastrar</a>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    @if(!isset($usuarios))
        <h3 style="color: red;">Nenhum registro encontrado!</h3>
    @else
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nome</th>
                    <th scope="col" class="px-6 py-3">Idade</th>
                    <th scope="col" class="px-6 py-3">E-mail</th>
                    <th scope="col" class="px-6 py-3">Celular</th>
                    <th scope="col" colspan="2" class="px-6 py-3">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $u)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $u->nome }}</td>
                        <td class="px-6 py-4">{{ $u->idade }}</td>
                        <td class="px-6 py-4">{{ $u->email }}</td>
                        <td class="px-6 py-4">{{ $u->celular }}</td>
                        <td class="px-6 py-4 text-right"><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('usuarios.show', $u->id) }}">Exibir</a></td>
                        <td class="px-6 py-4 text-right"><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('usuarios.edit', $u->id) }}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900 dark:text-white">
                    <td class="px-6 py-3" colspan="6">Usuários cadastrados: {{ $usuarios->count() }}</td>
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