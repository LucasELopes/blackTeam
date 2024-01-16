@extends('layouts.sign')
@section('title', 'Login')

@section('content-header')
    <img src="{{asset('assets/img/logo/logoLonga.png')}}" alt="logo">
@endsection

@section('content-main')
<div class="container-login">
    <form action="" method="post" class="container-login-inputs">
        <label class="container-login-label">
            <img src="{{asset('assets/img/icone/emailIcon.svg')}}" alt="email icon" required>
            <input type="text" placeholder="Digite seu email" name="email">
        </label>
        <label class="container-login-label">
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
    </form>
</div>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection