@extends('layout')

@section('content')
    <section id="estoque">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Estoque
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Estoque</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3 d-flex flex-row justify-content-between">
                                        <div class="mb-3">
                                            <label for="nomeMaterial" class="form-label">Nome do Material</label>
                                            <input type="text" class="form-control" id="nomeMaterial">
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantitadadeMaterial" class="form-label">Quantidade</label>
                                            <input type="text" class="form-control" id="quantitadadeMaterial">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row justify-content-between">
                                        <div class="mb-3">
                                            <label for="nomeFornecedor" class="form-label">Fornecedor</label>
                                            <input type="text" class="form-control" id="nomeFornecedor">
                                        </div>
                                        <div class="mb-3">
                                            <label for="precoMaterial" class="form-label">Preço(unidade)</label>
                                            <input type="tel" class="form-control" id="precoMaterial">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                                        <div class="mb-3">
                                            <label for="contatoFornecedor" class="form-label">Contato do Fornecedor</label>
                                            <input type="text" class="form-control" id="contatoFornecedor">
                                        </div>
                                        <div class="mb-3">
                                            <label for="valorTotal" class="form-label">Valor Total</label>
                                            <input type="text" class="form-control" id="valorTotal">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                                        <div class="mb-3">
                                            <label for="lote" class="form-label">Lote</label>
                                            <input type="text" class="form-control" id="lote">
                                        </div>
                                        <div class="mb-3">
                                            <label for="validadeLote" class="form-label">Validade do Lote</label>
                                            <input type="text" class="form-control" id="validadeLote">
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
                        <th scope="col">Item</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Nome do Item
                        </td>

                        <td>
                            99
                        </td>

                        <td>
                            Ingrediente/Material
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
