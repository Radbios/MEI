@extends('layout')

@section('content')
@include('client.create')
    <section id="clientes">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Clientes
            </div>
            <div class="">
                <button type="button" class="btn btn-primary bg-blue">Filtrar</button>
                <button type="button" class="btn btn-primary bg-blue" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Adicionar</button>
                <!-- Modal para adicionar Clientes  -->
                
            </div>
        </div>
        <div id="table-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>
                                {{$cliente->name}}
                            </td>
                            <td>
                                {{$cliente->phoneNumber}}
                            </td>
                            <td>
                                <div class="">
                                    <a href="{{route('clientes.show', [$cliente->id])}}">
                                        <button type="button" class="btn btn-primary bg-blue">
                                            Ver
                                        </button>
                                    </a>
                                    <a href="{{Route("clientes.edit", [$cliente->id])}}">
                                        <button type="button" class="btn btn-primary bg-blue">
                                            Editar
                                        </button>
                                    </a>
                                    <form action="{{Route("clientes.delete", [$cliente->id])}}" method = "post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-primary bg-blue">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                <tbody>

                </tbody>
            </table>
        </div>
    </section>
@endsection
