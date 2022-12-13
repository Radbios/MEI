@extends('layout')

@section('content')
    <section id="vendas">
        <div id="table-title" class="d-flex justify-content-between mx-4">
            <div class="title-text">
                Vendas
            </div>
        </div>
        <div class="itens_vendas">
            <div class="item_vendas">
                <div class="title-text">
                    10
                </div>
                <p>vendas hoje</p>
            </div>
            <div class="item_vendas">
                <div class="title-text">
                    45
                </div>
                <p>vendas por mês</p>
            </div>
            <div class="item_vendas">
                <div class="title-text">
                    55
                </div>
                <p>total de vendas</p>
            </div>
        </div>
        <div class="stat">
            <div id="table-title" class="d-flex justify-content-between m-4">
                <div class="title-text">
                    Estatísticas
                </div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="btnradio1">semana passada</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btnradio2">mês passado</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btnradio3">ano passado</label>
                </div>
                <input type="date" name="" id="date-input">
            </div>
            <div class="grafico">
                <img src="./assets/img/graphs.png" alt="">

            </div>
        </div>
    </section>
@endsection
