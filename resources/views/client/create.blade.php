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
        <form action="{{Route("clientes.store")}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="name" name="name"
                        aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text"></div> -->
                </div>
                <div class="mb-3 d-flex flex-row justify-content-between">
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Contato</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text"></div> -->
                </div>
                <div class="mb-3 d-flex flex-row gap-2 justify-content-between">
                    <div class="mb-3">
                        <label for="city" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="neighborhood" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="neighborhood" name="neighborhood">
                    </div>
                    <div class="mb-3">
                        <label for="street" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="street" name="street">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">N°</label>
                        <input type="text" class="form-control" id="number" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep">
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
<!-- //Modal -->