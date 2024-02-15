@extends('layouts.sign')
@section('title', 'Cadastrar')

@section('content-main')
<div class="container-login-header">
    {{-- <img src="{{asset('assets/img/icone/userLogin.svg')}}" alt=""> --}}
    <h1>Cadastro</h1>
</div>
<form action="{{route('site.createUser')}}" method="post" class="container-login-inputs">
    @csrf
    <label class="container-login-inputs-label">
        <img src="{{asset('assets/img/icone/userIcon.svg')}}" alt="">
        <input type="text" name="name" placeholder="Digite seu nome" value='{{request()->old('name') ?? ''}}' required>
    </label>
    <label class="container-login-inputs-label">
        <img src="{{asset('assets/img/icone/telephone.svg')}}" alt="telephone icon">
        <input type="tel" placeholder="Digite seu número" name="tel" value='{{request()->old('tel') ?? ''}}' required>
    </label>
    <label class="container-login-inputs-label">
        <img src="{{asset('assets/img/icone/emailIcon.svg')}}" alt="email icon">
        <input type="email" placeholder="Digite seu email" name="email" value='{{request()->old('email') ?? ''}}' required>
    </label>
    <label class="container-login-inputs-label">
        <img src="{{asset('assets/img/icone/passwordIcon.svg')}}" alt="">
        <input 
            type="password"
            name="password" 
            placeholder="Digite sua senha" 
            id="inputCreatePass" 
            minlength="6" 
            onkeyup="checkPass()"
            required
        >
        <img 
            id="createPass"
            src="{{asset('assets/img/icone/showInformation.svg')}}" 
            alt="mostrar senha" 
            title="mostrar senha" 
            onclick="showPassword(id)"
        >
    </label>
    <label class="container-login-inputs-label">
        <img src="{{asset('assets/img/icone/passwordIcon.svg')}}" alt="">
        <input 
            type="password" 
            name="password" 
            placeholder="Confirme sua senha" 
            id="inputConfirmePass" 
            minlength="6"
            onkeyup="checkPass()" 
            required
        >
        <img 
            id="confirmPass"
            src="{{asset('assets/img/icone/showInformation.svg')}}" 
            alt="mostrar senha" 
            title="mostrar senha" 
            onclick="showPassword(id)"
        >
    </label>
    <div class="container-login-inputs-submit">
        <button type="submit">Criar</button>
    </div>
</form>
<pre>
    {{print_r($errors)}}
</pre>
@endsection
@section('script') 
    <script src="{{asset('assets/js/script.js')}}"></script>
@endsection