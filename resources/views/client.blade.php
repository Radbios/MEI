@extends('layout')

@section('content')
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Clientes</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nomeCliente" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="nomeCliente"
                                            aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                    </div>
                                    <div class="mb-3 d-flex flex-row justify-content-between">
                                        <div class="mb-3">
                                            <label for="cpfCliente" class="form-label">CPF</label>
                                            <input type="text" class="form-control" id="cpfCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contatoCliente" class="form-label">Contato</label>
                                            <input type="tel" class="form-control" id="contatoCliente">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailCliente" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailCliente"
                                            aria-describedby="emailHelp">
                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                    </div>
                                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                                        <div class="mb-3">
                                            <label for="enderecoCliente" class="form-label">Endereço</label>
                                            <input type="text" class="form-control" id="enderecoCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="numeroCliente" class="form-label">N°</label>
                                            <input type="text" class="form-control" id="numeroCliente">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cepCliente" class="form-label">CEP</label>
                                            <input type="text" class="form-control" id="cepCliente">
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
                <!-- //Modal -->
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
                    <tr>
                        <td>
                            Fabiano
                        </td>

                        <td>
                            82 9999-9999
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
            </table>
        </div>
    </section>
@endsection
