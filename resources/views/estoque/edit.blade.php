@extends('layout')

@section('content')
<div class="container-sm p-4">
    <div id="table-title" class="d-flex justify-content-between mx-4">
        <div class="title-text">
            Editar Informações
        </div>
    </div>
    <form action="{{Route("estoque.update", [$material->id])}}" method="post">
        @csrf
        @method('put')
        <div class="">
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Item</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$material->name}}" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text"></div> -->
            </div>
            <div class="mb-3 d-flex flex-row justify-content-between">
                <div class="mb-3">
                    <label for="fornecedor" class="form-label">Fornecedor</label>
                    <input type="tel" class="form-control" id="fornecedor" name="fornecedor" value="{{$material->fornecedor}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="contato" class="form-label">Contato do fornecedor</label>
                <input type="text" class="form-control" id="contato" name="contato" value="{{$material->contatoFornecedor}}" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text"></div> -->
            </div>
            <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                <div class="mb-3">
                    <label for="lote" class="form-label">Lote</label>
                    <input type="text" class="form-control" id="lote" name="lote" value="{{$material->lote}}">
                </div>
                <div class="mb-3">
                    <label for="validadeLote" class="form-label">Validade do lot</label>
                    <input type="text" class="form-control" id="validadeLote" name="validadeLote" value="{{$material->validadeLote}}">
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" value="{{$material->price}}">
                </div>
                <div class="mb-3">
                    <label for="unidade" class="form-label">Unidade</label>
                    <input type="text" class="form-control" id="unidade" name="unidade" value="{{$material->unit}}">
                </div>
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{$material->amount}}">
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection
