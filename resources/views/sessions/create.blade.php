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
                <p class="title" id="titleBlue">Login</p>
                <p id="subtitle">Bem-vindo! Somos um sistema de gerenciamento desenvolvido por alunos da UFAL.</p>
            </div>
            <div class="inputBoxRight">
                <div class="labelInputRight">
                    <label for="email">E-mail</label>
                    <input name="email" id="email" type="text">
                </div>
                <div class="labelInputRight">
                    <label for="password">Senha</label>
                    <input name="password" id="password" type="password">
                </div>
                <div class="checkBoxRight">
                    <div class="checkboxText">
                        <input type="checkbox" name="" id="remember-me">
                        <label for="remember-me">Lembre-me</label>
                    </div>
                    <a href="/recuperacao">Esqueci minha senha</a>
                </div>
            </div>
            <div class="boxBtnLogin">
                <button class="btnLogin">
                    <a href="/">
                        Login
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
