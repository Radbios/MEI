@extends('layout')

@section('content')
<!-- main -->
<!-- cards  -->
<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">80</div>
            <div class="cardName">Vendas</div>
        </div>
        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers">12</div>
            <div class="cardName">Clientes</div>
        </div>
        <div class="iconBx">
            <ion-icon name="accessibility-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers">130</div>
            <div class="cardName">Produtos</div>
        </div>
        <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers">R$57</div>
            <div class="cardName">Ganhos</div>
        </div>
        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>

<!-- Add charts  -->
<div class="graphBox">
    <div class="box">
        <canvas id="myChart"></canvas>
    </div>
    <div class="box">
        <canvas id="earning"></canvas>
    </div>

</div>

<div class="details">
    <!-- order data list  -->
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Pedidos Recentes
            </h2>
            <a href="" class="btn">Ver Todos</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Produto</td>
                    <td>Preço</td>
                    <td>Cliente</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Apple</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status pending">Pendente</span></td>
                </tr>
                <tr>
                    <td>TV</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status inprogress">Em Andamento</span></td>
                </tr>
                <tr>
                    <td>TV</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status inprogress">Em Andamento</span></td>
                </tr>
                <tr>
                    <td>TV</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status inprogress">Em Andamento</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Entregue</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Entregue</span></td>
                </tr>
                <tr>
                    <td>Apple</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Devolvido</span></td>
                </tr>
                <tr>
                    <td>Apple</td>
                    <td>R$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Devolvido</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- New Customers  -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Clientes Recentes</h2>
        </div>
        <table>
            <tr>
                <td width="60px"><div class="imgBx"><img src="/assets/img/img1.png" alt=""></div></td>
                <td><h4>David<br><spam>Rua sei la o que, avenida sim, n° 123.</spam></h4></td>
            </tr>
            <tr>
                <td width="60px"><div class="imgBx"><img src="/assets/img/img1.png" alt=""></div></td>
                <td><h4>David<br><spam>Rua sei la o que, avenida sim, n° 123.</spam></h4></td>
            </tr>
            <tr>
                <td width="60px"><div class="imgBx"><img src="/assets/img/img1.png" alt=""></div></td>
                <td><h4>David<br><spam>Rua sei la o que, avenida sim, n° 123.</spam></h4></td>
            </tr>
            <tr>
                <td width="60px"><div class="imgBx"><img src="/assets/img/img1.png" alt=""></div></td>
                <td><h4>David<br><spam>Rua sei la o que, avenida sim, n° 123.</spam></h4></td>
            </tr>
            <tr>
                <td width="60px"><div class="imgBx"><img src="/assets/img/img1.png" alt=""></div></td>
                <td><h4>David<br><spam>Rua sei la o que, avenida sim, n° 123.</spam></h4></td>
            </tr>
        </table>
    </div>
</div>
@endsection
