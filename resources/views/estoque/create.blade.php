
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Estoque</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ Route('estoque.store') }}" method="post">
                @csrf
                @method("post")
                <div class="modal-body">
                    <div class="mb-3 d-flex flex-row justify-content-between">
                        <div class="mb-3">
                            <label for="nomeMaterial" class="form-label">Nome do Material</label>
                            <input type="text" class="form-control" id="nomeMaterial" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="quantitadadeMaterial" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" id="quantitadadeMaterial" name="qtd">
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-row justify-content-between">
                        <div class="mb-3">
                            <label for="nomeFornecedor" class="form-label">Fornecedor</label>
                            <input type="text" class="form-control" id="nomeFornecedor" name="fornecedor">
                        </div>
                        <div class="mb-3">
                            <label for="precoMaterial" class="form-label">Preço(unidade)</label>
                            <input type="tel" class="form-control" id="precoMaterial" name="preco">
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                        <div class="mb-3">
                            <label for="contatoFornecedor" class="form-label">Contato do Fornecedor</label>
                            <input type="text" class="form-control" id="contatoFornecedor" name="contatoFornecedor">
                        </div>
                        <div class="mb-3">
                            <label for="valorTotal" class="form-label">Valor Total</label>
                            <input type="text" class="form-control" id="valorTotal" value="">
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                        <div class="mb-3">
                            <label for="lote" class="form-label">Lote</label>
                            <input type="text" class="form-control" id="lote" name="lote">
                        </div>
                        <div class="mb-3">
                            <label for="validadeLote" class="form-label">Validade do Lote</label>
                            <input type="date" class="form-control" id="validadeLote" name="validadeLote">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
