@extends('layout.layout')

@section('content')
    <div class="container">
        <form action="/login" method="POST">
            <h3 class="">LOGIN</h3>
            @csrf
            <div class="form-field">
                <label for="email" class="">Email</label>
                <input type="text" class="" name="email">
            </div>
            <div class="form-field">
                <label for="name" class="">Password</label>
                <input type="text" class="" name="password">
            </div>
            <button type="submit">LOGIN</button>
        </form>
    </div>
@endsection