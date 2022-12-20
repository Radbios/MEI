@extends('layout')

@section('content')
    <form action="{{Route("produtos.update", [$produto->id])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 d-flex flex-row justify-content-between">
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$produto->name}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço(unidade)</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$produto->price}}">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>  
@endsection