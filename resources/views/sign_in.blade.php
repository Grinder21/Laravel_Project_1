@extends('layouts.app')

@section('title-block')
    Войти
@endsection

@section('content')
    <form action='{{ route("sign_in_form") }}' method='post'>
        @csrf
        <div class='form-group col-md-5'>
        <label for='email'>Введите e-mail:</label> <input type='email' name='email' class='form-control'/>
        </div>
        <div class='form-group col-md-5'>
        <label for='password'>Введите пароль: </label><input type='password' name='password' placeholder='Введите пароль' class='form-control'/>
        </div>
        <div class='form-group'>
        <input type="submit" name='log' value='Войти' class='btn active btn-success'>
        </div>
        <p>
            Вы не зарегистрированы? <a href='sign_up'>Sign Up</a>
        </p>
    </form>
@endsection