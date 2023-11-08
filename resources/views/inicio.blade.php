@extends('dashboard')
@section('content')

<style>
    .tabela { /* grid gap-6 mb-6 md:grid-cols-3 */
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 5px;
        margin: 0;
    }

    table {
        width: 100%;
        margin: 0 auto; /* Centraliza a tabela horizontalmente na div */
    }

    th {
        padding: 10px;
        text-align: center;
    }
    
    #col2 {
        padding: 5px;
        text-align: right;
    }
    #col1 {
        padding: 5px;
        text-align: left;
    }
    h2 {
        text-align: center;
        font-weight: bold;
    }
</style>
                        
<h2 class="grid gap-6 mb-6 md:grid-cols-3"><span>Ontem</span>   <span>Hoje</span>   <span>Amanhã</span>  </h2><br>

<div class="grid gap-6 mb-6 md:grid-cols-3">
    
    <div class="tabela">
        <div class="" style="text-align: center ">
            <table class="">
            
            <tr class="">
                <td id="col1">Evento 1</td>
                <td id="col2">12:00</td>
            </tr>
            <tr>
                <td id="col1">Evento 2</td>
                <td id="col2">17:00</td>
            </tr>
            <tr>
                <td id="col1">Evento 3</td>
                <td id="col2">21:00</td>
            </tr>
            <!-- Adicione mais linhas com dados conforme necessário -->
            </table>
        </div>
    </div>
    <div class="tabela">
        <div class="" style="text-align: center ">
            <table class="">
            
            <tr class="">
                <td id="col1">Evento 1</td>
                <td id="col2">12:00</td>
            </tr>
            <tr>
                <td id="col1">Evento 2</td>
                <td id="col2">17:00</td>
            </tr>
            <tr>
                <td id="col1">Evento 3</td>
                <td id="col2">21:00</td>
            </tr>
            <!-- Adicione mais linhas com dados conforme necessário -->
            </table>
        </div>
    </div>
    <div class="tabela">
        <div class="" style="text-align: center ">
            <table class="">
            
            <tr class="">
                <td id="col1">Evento 1</td>
                <td id="col2">12:00</td>
            </tr>
            <tr>
                <td id="col1">Evento 2</td>
                <td id="col2">17:00</td>
            </tr>
            <tr>
                <td id="col1">Evento 3</td>
                <td id="col2">21:00</td>
            </tr>
            <!-- Adicione mais linhas com dados conforme necessário -->
            </table>
        </div>
    </div>
</div>

@endsection