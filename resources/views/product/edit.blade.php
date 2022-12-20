@extends('layout')

@section('content')
<div class="container-sm p-4">
    <div id="table-title" class="d-flex justify-content-between mx-4">
        <div class="title-text">
            Atualizar Produto
        </div>
    </div>
    <form action="{{Route("produtos.update", [$produto->id])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 d-flex flex-row justify-content-between gap-2">
            <div class="mb-3 w-75">
                <label for="name" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$produto->name}}">
            </div>
            <div class="mb-3 w-75">
                <label for="price" class="form-label">Preço(unidade)</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$produto->price}}">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>  
</div>
@endsection