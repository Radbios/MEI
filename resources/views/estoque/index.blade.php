@extends('layout')

@section('content')
@include('estoque.create')
<section id="estoque">
    <div id="table-title" class="d-flex justify-content-between mx-4">
        <div class="title-text">
            Estoque
        </div>
        <div class="d-flex gap-2">
            <div class="d-flex gap-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar</button>
            <!-- Modal para adicionar estoque  -->
            <!-- Modal -->

        </div>
    </div>
    <div id="table-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor/un</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materiais as $material)
                <tr>
                    <td>
                        {{ $material->name }}
                    </td>

                    <td>
                        {{ $material->amount }}
                    </td>

                    <td>
                        {{ $material->value }}/{{ $material->unit }}
                    </td>

                    <td>
                        <div class="">
                            <a href="{{Route("estoque.show", [$material->id])}}">
                                <button type="button" class="btn btn-primary bg-blue">Ver</button>
                            </a>
                            <a href="{{Route("estoque.edit", [$material->id])}}"">
                                    <button type=" button" class="btn btn-primary bg-blue">Editar</button>
                            </a>
                            <form action="{{Route("estoque.delete", [$material->id])}}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-primary bg-blue">Deletar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

            <tbody>

            </tbody>
        </table>
    </div>
</section>
@endsection
