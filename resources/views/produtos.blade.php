@extends('layout')

@section('content')
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Produtos</h1>
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
                                            <label for="precoProduto" class="form-label">Preço(unidade)</label>
                                            <input type="text" class="form-control" id="precoProduto">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row justify-content-between">
                                        <div class="mb-3">
                                            <label for="materialProduto" class="form-label">Material Usado</label>
                                            <input type="text" class="form-control" id="materialProduto">
                                        </div>
                                        <div class="mb-3">
                                            <label for="unidadeMedidaProduto" class="form-label">Unidade de Medida</label>
                                            <input type="tel" class="form-control" id="unidadeMedidaProduto">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                                        <div class="mb-3">
                                            <label for="listaProduto" class="form-label">Lista</label>
                                            <textarea class="form-control" aria-label="With textarea" id="listaProduto"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="custoProduto" class="form-label">Custo</label>
                                            <input type="text" class="form-control" id="custoProduto">
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
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Nome do produto
                        </td>
                        <td>
                            R$11111,00
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
