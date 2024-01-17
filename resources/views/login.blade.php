@extends('layouts.sign')
@section('title', 'Login')

@section('content-header')

@section('content-main')
    <div class="container-login-header">
        {{-- <img src="{{asset('assets/img/icone/userLogin.svg')}}" alt=""> --}}
        <h1>LOGIN</h1>
    </div>
    <form action="/findUser" method="post" class="container-login-inputs">
        @csrf
        <label class="container-login-inputs-label">
            <img src="{{asset('assets/img/icone/emailIcon.svg')}}" alt="email icon">
            <input type="text" placeholder="Digite seu email" name="email" required>
        </label>
        <label class="container-login-inputs-label">
            <img src="{{asset('assets/img/icone/passwordIcon.svg')}}" alt="">
            <input type="password" name="password" placeholder="Digite sua senha" id="inputPass" required>
            <img 
                id="userPass"
                src="{{asset('assets/img/icone/showInformation.svg')}}" 
                alt="mostrar senha" 
                title="mostrar senha" 
                onclick="showPassword()"
            >
        </label>
        <div class="container-login-inputs-submit">
            <button type="submit">Entrar</button>
            <p>Se não possui uma conta <a href="/register">clique aqui</a></p>
        </div>
    </form>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection