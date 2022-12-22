
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Encomendas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{Route("encomendas.store")}}" method="post">
                @csrf
                @method("post")
                <div class="modal-body">
                    <div class="mb-3 d-flex flex-row justify-content-between">
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Nome do Produto</label>
                            <select name="productId" id="productId" class="form-control">
                                <option value="" disabled selected>Selecione um produto</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{$produto->id}}">{{$produto->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade">
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-row justify-content-between">
                        <div class="mb-3">
                            <label for="nomeCliente" class="form-label">Cliente</label>
                            <select name="clientId" id="clientId" class="form-control overflow-auto mh-52px">
                                <option value="" disabled selected>Selecione um cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{$cliente->id}}">{{$cliente->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                        <div class="mb-3">
                            <label for="valorFrete" class="form-label">Frete</label>
                            <input type="number" class="form-control" id="valorFrete" name="valorFrete">
                        </div>
                        <div class="mb-3">
                            <label for="valorFrete" class="form-label">Data do pedido</label>
                            <input type="date" class="form-control" id="orderDate" name="orderDate">
                        </div>
                        <div class="mb-3">
                            <label for="valorFrete" class="form-label">Data de entrega</label>
                            <input type="date" class="form-control" id="deliveryDate" name="deliveryDate">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
