@extends('layouts.app')

@section('title', "Home")


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tarefas</div>
                <div class="panel-body">
                    <div class="card border">
                        <div class="card-body">
                            <h5 class="card-title"> Lista de Tarefas</h5>
                            <table class="table table-ordered table-hover">
@if(count($tars) > 0)
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Descrição</th>
                                        <th>Prioridade</th>
                                        <th>Ações</th>
                                    <tr>
                                </thead>
                                <tbody>
    @foreach($tars as $tar)
                                     <tr>
                                        <td>{{$tar->title}}</td>
                                        <td>{{$tar->description}}</td>
                                        <td>
                                            @if($tar->priority == "1")
                                            Alta
                                            @elseif($tar->priority == "2")
                                            Médio
                                            @elseif($tar->priority == "3")
                                            Pequena
                                            @else
                                            Número Inválido
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/tarefas/editar/{{$tar->id}}" class="btn btn-sm btn-primary">Editar</a>
                                            <a href="/tarefas/apagar/{{$tar->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                        </td>
                                    <tr>
    @endforeach
                                </tbody>
@else   
Adicione algumas tarefas...                            
@endif


                            </table>   
                        </div> 
                    </div> 
                    <div class="card-footer">
                    <a href="/tarefas/novo" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Nova Tarefa</a>       
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
