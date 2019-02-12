@extends('layouts.app')
@section('title', "Nova Tarefa")


@section('content')
<div class="card border">
    <div class="card-body">
        <form action="/tarefas" method="POST">
            {!! csrf_field() !!}
            <php? {{$id = Auth::user()->id}} ?>
            <div class="form-group">
                <label for="tituloTarefa">Título da Tarefa</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Título">
                <div class="form-group">
                    <label for="description">Descrição: </label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrição"></textarea>
                </div>
                <label for="priority">Prioridade: </label>
                    <select class="form-control" id="priority" name=priority>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                <div class="card-body">
                <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{$id}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>        
@endsection