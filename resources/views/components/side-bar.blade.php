<!-- <div id="logo" class="side-item">
    <img src="../assets/img/brasao-ufal.png" alt="" class="brasao-ufal">
</div> -->
<div class="side-list">
    <ul>
        <!-- <li class="side-item">
            <a href="" class="link-item">
                <i class="bi bi-list"></i>
                <div class="item-text">Menu</div>
            </a>
        </li> -->

        <li class="side-item">
            <a href="/visaogeral" class="link-item">
                <i class="bi bi-graph-up"></i>
                <div class="item-text">Visão Geral</div>
            </a>
        </li>

        <li class="side-item">
            <a href="{{route("clientes.index")}}" class="link-item">
                <i class="bi bi-person-lines-fill"></i>
                <div class="item-text">Clientes</div>
            </a>
        </li>

        <li class="side-item">
            <a href="{{route("produtos.index")}}" class="link-item">
                <i class="bi bi-clipboard2"></i>
                <div class="item-text">Produtos</div>
            </a>
        </li>

        <li class="side-item">
            <a href="{{route("encomendas.index")}}" class="link-item">
                <i class="bi bi-bag-fill"></i>
                <div class="item-text">Encomendas</div>
            </a>
        </li>

        <li class="side-item">
            <a href="{{route("estoque.index") }}" class="link-item">
                <i class="bi bi-box-seam"></i>
                <div class="item-text">Estoques</div>
            </a>
        </li>
    </ul>
</div>

<form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
    <div id="logout" class="side-item">
        @csrf
        <i class="bi bi-door-open"></i>
        <button type="submit" class="link-item"><p class="item-text">Sair</p></button>
    </div>
</form>
