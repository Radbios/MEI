<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/layout.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="content">
            <sidebar>
                <div id="logo" class="side-item">
                    <img src="../assets/img/brasao-ufal.png" alt="" class="brasao-ufal">
                </div>

                <div class="side-list">
                    <ul>
                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-list"></i>
                                <div class="item-text">Menu</div>
                            </a>
                        </li>

                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-graph-up"></i>
                                <div class="item-text">Visão Geral</div>
                            </a>
                        </li>

                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-person-lines-fill"></i>
                                <div class="item-text">Clientes</div>
                            </a>
                        </li>
                        
                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-clipboard2"></i>
                                <div class="item-text">Produtos</div>
                            </a>
                        </li>

                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-bag-fill"></i>
                                <div class="item-text">Encomendas</div>
                            </a>
                        </li>

                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-box-seam"></i>
                                <div class="item-text">Estoques</div>
                            </a>
                        </li>

                        <li class="side-item">
                            <a href="" class="link-item">
                                <i class="bi bi-cart2"></i>
                                <div class="item-text">Vendas</div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="logout" class="side-item">
                    <a href="" class="link-item">
                        <i class="bi bi-door-open"></i>
                        <div class="item-text">Logout</div>
                    </a>
                </div>
            </sidebar>
            
            <main>

                @yield('content')
                
            </main>
        </div>
    </body>
    </html>