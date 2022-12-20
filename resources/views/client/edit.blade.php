@extends('layout')

@section('content')
<div class="container-sm p-4">
    <div id="table-title" class="d-flex justify-content-between mx-4">
        <div class="title-text">
            Editar Informações
        </div>
    </div>
    <form action="{{Route("clientes.update", [$cliente->id])}}" method="post">
        @csrf
        @method('put')
        <div class="">
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$cliente->name}}"
                aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text"></div> -->
            </div>
            <div class="mb-3 d-flex flex-row justify-content-between">
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Contato</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" value="{{$cliente->phoneNumber}}">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}"
                aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text"></div> -->
            </div>
            <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                <div class="mb-3">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{$cliente->address->city}}">
                </div>
                <div class="mb-3">
                    <label for="neighborhood" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{$cliente->address->neighborhood}}">
                </div>
                <div class="mb-3">
                    <label for="street" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="street" name="street" value="{{$cliente->address->street}}">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">N°</label>
                    <input type="text" class="form-control" id="number" name="number" value="{{$cliente->address->number}}">
                </div>
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{$cliente->address->cep}}">
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
    @endsection