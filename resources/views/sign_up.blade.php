@extends('layouts.app')

@section('title-block')
    Регистрация
@endsection

@section('content')
    <form action='{{ route("sign_up_form") }}' method='post'>
        @csrf
        <div class='form-group col-md-5'>
        <label for='first_name'>Введите имя:</label> <input type='text' name='first_name' laceholder='Введите имя' class='form-control' />
        </div>
        <div class='form-group col-md-5'>
        <label for='last_name'>Введите фамилию: </label><input type='text' name='last_name' laceholder='Введите фамилию' class='form-control' />
        </div>
        
        <div class='form-group col-md-5'>
        <label for='email'>Введите e-mail:</label> <input type='email' name='email' laceholder='Введите e-mail' class='form-control'/>
        </div>
        <div class='form-group col-md-5'>
        <label for='password'>Введите пароль: </label><input type='password' name='password' placeholder='Введите пароль' class='form-control'/>
        </div>
        <div class='form-group'>
        <input type="submit" name='log' value='Зарегистрироваться' class='btn active btn-success'>
        </div>
        <p>
            Вы зарегистрированы? <a href='sign_in'>Sign In</a>
        </p>
    </form>
@endsection
