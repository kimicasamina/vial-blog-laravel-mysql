@extends('layout.layout')

@section('content')
<form action="/register" method="POST" class="form register-form container">
    <h1 class="form__title">Join Aaa.</h1>
    @csrf
    <div class="form__field">
        <label for="name" class="form__label">Username</label>
        <input type="text" class="form__input" name="name">
    </div>
    <div class="form__field">
        <label for="email" class="form__label">Email</label>
        <input type="text" class="form__input" name="email">
    </div>
    <div class="form__field">
        <label for="name" class="form__label">Password</label>
        <input type="text" class="form__input" name="password">
    </div>
    <button type="submit" class="btn btn--primary">REGISTER</button>
</form>

@endsection

