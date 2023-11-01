@extends('dashboard')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="content">
                        @yield('content')
                        
                            
<!DOCTYPE html>
  <head>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      #calendario {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vh;
       
      }

      th, td {
        border: 1px solid #ccc;
        border-radius: 100px;
        text-align: center;
        padding: 10px;
      }

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
  </head>


<div><button class="botao">botão</button></div>

<div class=><button style="border: #ccc 2px;">botão2</button></div>


<div id="calendario"></div>


<div class=><button style="border: #ccc 2px;">botão</button></div>

<div class=><button style="border: #ccc 2px;">botão2</button></div>


<script>
  function criarCalendario() {
    const diasDaSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
    const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

    const data = new Date();
    const ano = data.getFullYear();
    const mes = data.getMonth();

    const primeiroDia = new Date(ano, mes, 1);
    const ultimoDia = new Date(ano, mes + 1, 0);

    const calendario = document.getElementById('calendario');
    const table = document.createElement('table');
    const thead = document.createElement('thead');
    const tbody = document.createElement('tbody');

    // Cabeçalho da tabela (dias da semana)
    const tr = document.createElement('tr');
    for (let dia of diasDaSemana) {
      const th = document.createElement('th');
      th.textContent = dia;
      tr.appendChild(th);
    }
    thead.appendChild(tr);

    // Corpo da tabela (dias do mês)
    let diaAtual = 1;
    for (let i = 0; i < 6; i++) {
      const tr = document.createElement('tr');
      for (let j = 0; j < 7; j++) {
        const td = document.createElement('td');
        if (i === 0 && j < primeiroDia.getDay()) {
          td.textContent = '';
        } else if (diaAtual > ultimoDia.getDate()) {
          td.textContent = '';
        } else {
          const link = document.createElement('a');
          link.textContent = diaAtual;
          link.href = 'http://localhost:8000/compromissos/create'; // Substitua 'sua_pagina_destino.html' pela URL desejada
          td.appendChild(link);
          diaAtual++;
        }
        tr.appendChild(td);
      }
      tbody.appendChild(tr);
    }

    table.appendChild(thead);
    table.appendChild(tbody);
    calendario.appendChild(table);
  }

criarCalendario();
</script>

</x-app-layout>
@endsection