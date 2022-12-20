@extends('layout')

@section('content')
    <section id="encomendas">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Encomendas
            </div>
            <div class="">
                <button type="button" class="btn btn-primary bg-blue">Filtrar</button>
                <button type="button" class="btn btn-primary bg-blue" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Adicionar</button>
                <!-- Modal para adicionar Clientes  -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Encomendas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3 d-flex flex-row justify-content-between">
                                        <div class="mb-3">
                                            <label for="nomeProduto" class="form-label">Nome do Produto</label>
                                            <input type="text" class="form-control" id="nomeProduto">
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantidadeEncomenda" class="form-label">Quantidade</label>
                                            <input type="text" class="form-control" id="quantidadeEncomenda">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row justify-content-between">
                                        <div class="mb-3">
                                            <label for="nomeCliente" class="form-label">Cliente</label>
                                            <input type="text" class="form-control" id="nomeCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contatoCliente" class="form-label">Contato</label>
                                            <input type="tel" class="form-control" id="contatoCliente">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                                        <div class="mb-3">
                                            <label for="cepCliente" class="form-label">CEP</label>
                                            <input type="text" class="form-control" id="cepCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="numeroCliente" class="form-label">N°</label>
                                            <input type="text" class="form-control" id="numeroCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailCliente" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="emailCliente">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                                        <div class="mb-3">
                                            <label for="enderecoCliente" class="form-label">Endereço</label>
                                            <input type="text" class="form-control" id="enderecoCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="valorTotal" class="form-label">Valor Total</label>
                                            <input type="text" class="form-control" id="valorTotal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="valorFrete" class="form-label">Frete</label>
                                            <input type="email" class="form-control" id="valorFrete">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
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
