@extends('layout')

@section('content')
@include('client.create')
    <section id="clientes">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Clientes
            </div>
            <div class="d-flex gap-2">
                <div class="input-group">
                    <form action="{{ route('clientes.search') }}" method="post">
                        @csrf
                        <input type="text" name="search" placeholder="Filtrar:">
                        <button type="submit">Filtrar</button>
                    </form>
                    <!-- <form action="/" method="GET">
                        <input type="text" id="search" name="search" class="form-control placeholder="Pesquisar" aria-label="Pesquisar..." aria-describedby="button-addon2">
                    </form> -->
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
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
                                <div class="d-flex gap-2">
                                    <a href="{{route('clientes.show', [$cliente->id])}}">
                                        <button type="button" class="btnVer">
                                            Ver
                                        </button>
                                    </a>
                                    <a href="{{Route("clientes.edit", [$cliente->id])}}">
                                        <button type="button" class="btnEditar">
                                            Editar
                                        </button>
                                    </a>
                                    <form action="{{Route("clientes.delete", [$cliente->id])}}" method = "post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btnExcluir">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                <tbody>

                </tbody>
            </table>
            <div class="d-flex align-items-center gap-2 pagination">
                <!-- a Tag for previous page -->
                <a href="{{$clientes->previousPageUrl()}}" >
                    <i class="bi bi-caret-left-fill"></i>
                </a>
                @for($i=1;$i<=$clientes->lastPage();$i++)
                    <!-- a Tag for another page -->
                    <a href="{{$clientes->url($i)}}">{{$i}}</a>
                @endfor
                <!-- a Tag for next page -->
                <a href="{{$clientes->nextPageUrl()}}">
                    <i class="bi bi-caret-right-fill"></i>
                </a>
            </div> 
        </div>
    </section>
@endsection
