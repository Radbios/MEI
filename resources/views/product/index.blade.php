@extends('layout')

@section('content')
    @include('product.create')
    <section id="produtos">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Produtos
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
                        <th scope="col">Valor</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>
                                {{$produto->name}}
                            </td>
                            <td>
                                {{$produto->price}}
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{route('produtos.show', [$produto->id])}}">
                                        <button type="button" class="btn btn-primary bg-blue">
                                            Ver
                                        </button>
                                    </a>
                                    <a href="{{Route("produtos.edit", [$produto->id])}}">
                                        <button type="button" class="btn btn-primary bg-blue">
                                            Editar
                                        </button>
                                    </a>
                                    <form action="{{Route("produtos.delete", [$produto->id])}}" method = "post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-primary bg-blue">Deletar</button>
                                    </form>
                                </div>
                            </td>
                    @endforeach
                    </tr>
                </tbody>

                <tbody>

                </tbody>
            </table>
        </div>
    </section>
@endsection
