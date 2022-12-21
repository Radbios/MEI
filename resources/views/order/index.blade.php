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
                    <tr>
                        <td>
                            Nome do cliente
                        </td>

                        <td>
                            01/01/2022
                        </td>
                        <td>
                            Não Iniciado/Iniciado/Concluido
                        </td>

                        <td>
                            <div class="">
                                <button type="button" class="btn btn-primary bg-blue">Ver</button>
                                <button type="button" class="btn btn-primary bg-blue">Editar</button>
                                <button type="button" class="btn btn-primary bg-blue">Deletar</button>
                            </div>
                        </td>
                    </tr>
                </tbody>

                <tbody>

                </tbody>
            </table>
        </div>
    </section>
@endsection
