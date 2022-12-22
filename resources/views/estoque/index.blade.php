@extends('layout')

@section('content')
@include('estoque.create')
<section id="estoque">
    <div id="table-title" class="d-flex justify-content-between mx-4">
        <div class="title-text">
            Estoque
        </div>
        <div class="">
            <button type="button" class="btn btn-primary bg-blue">Filtrar</button>
            <button type="button" class="btn btn-primary bg-blue" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar</button>
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
