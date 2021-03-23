@extends('layouts.app')
@section('content')

<div class="container">
    <form id="frmproduto" name="frmproduto" action="{{ route('produto.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3>Editar</h3>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="descricao" class="form-control" id="descricao" name="descricao" value="{{ $produto->descricao }}">
        </div>
        
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="complemento" class="form-control" id="complemento" name="complemento" value="{{ $produto->complemento }}">
        </div>
        
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="quantidade" class="form-control" id="quantidade" name="quantidade" value="{{ $produto->quantidade }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 </div>

@endsection