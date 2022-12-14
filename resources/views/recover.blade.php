@extends('login')

@section('sign')
    <div class="containerMain">
        <div class="containerLeft">
            <div class="imgBox">
                <img src="assets/img/brasao-ufal.png" alt="">
            </div>
            <div class="titleBoxLeft">
                <p class="title">Ambiente de Gerenciamento para MEI do Ramo Alimentício</p>
            </div>
        </div>
        <div class="containerRight">
            <div class="titleBoxRight">
                <p class="title" id="titleBlue">Recuperação</p>
                <p id="subtitle">Digite seu e-mail e CPF, se as informações estiverem corretas enviaremos por e-mail a nova
                    senha.</p>
            </div>
            <div class="inputBoxRight">
                <div class="labelInputRight">
                    <label for="email">E-mail</label>
                    <input name="email" id="email" type="text">
                </div>
                <div class="labelInputRight">
                    <label for="CPF">CPF</label>
                    <input name="CPF" id="CPF" type="password">
                </div>

            </div>
            <div class="boxBtnLogin">
                <button class="btnLogin">
                    <a href="login.html">
                        Enviar
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
