@extends('layout')

@section('content')
@include('order.create')
    <section id="encomendas">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Encomendas
            </div>
            <div class="">
                <button type="button" class="btn btn-primary bg-blue">Filtrar</button>
                <button type="button" class="btn btn-primary bg-blue" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Adicionar</button>
                <!-- Modal para adicionar Pedidos  -->

            </div>
        </div>
        <div id="table-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">Data de entrega</th>
                        <th scope="col">Estado da entrega</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($encomendas as $encomenda)    
                        <tr>
                            <td>
                                {{$encomenda->client->name}}
                            </td>

                            <td>
                                {{$encomenda->deliveryDate}}
                            </td>
                            <td>
                                {{$encomenda->state}}
                            </td>

                            <td>
                                <div class="">
                                    <a href="{{Route("encomendas.show", [$encomenda->id])}}">
                                        <button type="button" class="btn btn-primary bg-blue">Ver</button>
                                    </a>
                                    <a href="{{Route("encomendas.edit", [$encomenda->id])}}"">
                                            <button type=" button" class="btn btn-primary bg-blue">Editar</button>
                                    </a>
                                    <form action="{{Route("encomendas.delete", [$encomenda->id])}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-primary bg-blue">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection