@extends('layout')

@section('content')
@include('order.create')
    <section id="encomendas">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Encomendas
            </div>
            <div class="d-flex gap-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
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
                                <div class="d-flex gap-2">
                                    <a href="{{Route("encomendas.show", [$encomenda->id])}}">
                                        <button type="button" class="btnVer">Ver</button>
                                    </a>
                                    <a href="{{Route("encomendas.edit", [$encomenda->id])}}"">
                                            <button type=" button" class="btnEditar">Editar</button>
                                    </a>
                                    <form action="{{Route("encomendas.delete", [$encomenda->id])}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btnExcluir">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex align-items-center gap-2 pagination">
                <!-- a Tag for previous page -->
                <a href="{{$encomendas->previousPageUrl()}}" >
                    <i class="bi bi-caret-left-fill"></i>
                </a>
                @for($i=1;$i<=$encomendas->lastPage();$i++)
                    <!-- a Tag for another page -->
                    <a href="{{$encomendas->url($i)}}">{{$i}}</a>
                @endfor
                <!-- a Tag for next page -->
                <a href="{{$encomendas->nextPageUrl()}}">
                    <i class="bi bi-caret-right-fill"></i>
                </a>
            </div> 
        </div>
    </section>
@endsection