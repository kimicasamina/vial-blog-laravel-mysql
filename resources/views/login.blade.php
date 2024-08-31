@extends('layout.layout')

@section('content')
<form action="/login" method="POST" class="form login-form container">
    <h1 class="form__title">Welcom Back.</h1>
    @csrf
    <div class="form-field form__field">
        <label for="email" class="form__label">Email</label>
        <input type="text" class="form__input" name="email">
    </div>
    <div class="form-field form__field">
        <label for="name" class="form__label">Password</label>
        <input type="text" class="form__input" name="password">
    </div>
    <button type="submit" class="btn btn--primary">LOGIN</button>
</form>
    {{-- <div class="container">
    </div> --}}
@endsection