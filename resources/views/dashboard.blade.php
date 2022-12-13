@extends('layout')

@section('content')
    <section id="home">
        <div id="content1" class="margin-main border-curved bg-gray d-flex flex-column align-items-center">
            <div class="title-text"> Pedidos </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border-danger">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer" style="background-color: red;">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-warning">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer" style="background-color: yellow;">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-success">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer" style="background-color: green;">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="content2" class="margin-main">
            <div id="content3">
                <div class="bg-gray border-curved hover-dash sombra d-flex flex-column justify-content-center">
                    <a href="./estoque.html">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div id="table-title" class="d-flex justify-content-center m-2">
                                <div class="title-text">
                                    Estoque
                                </div>
                            </div>
                            <div class="box-img">
                                <img src="./assets/img/graph1.png" alt="">
                            </div>
                            <div class="box-text">
                                <p>Produtos: 200</p>
                                <p>P. Validade: 2</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-gray border-curved hover-dash sombra d-flex flex-column justify-content-center">
                    <a href="./vendas.html">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div id="table-title" class="d-flex justify-content-center m-2">
                                <div class="title-text">
                                    Vendas
                                </div>
                            </div>
                            <div class="box-img">
                                <img src="./assets/img/graph2.png" alt="">
                            </div>
                            <div class="box-text">
                                <p>Lucros: 15%</p>
                                <p>Clientes: 29</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="content4" class="bg-gray border-curved hover-dash sombra">
                <div id="table-title" class="d-flex justify-content-center m-2">
                    <div class="title-text">
                        To Do List
                    </div>
                </div>
                <div class="mx-5">
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value=""
                                aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
