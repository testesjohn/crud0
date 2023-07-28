@extends('layout.layout')
@section('title', 'create')
@section('content')
<h1>Create</h1>

<form action="{{route('store')}}" method="post">
    @csrf

    <div>
        <label>Nome:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Cpf:</label>
        <input type="text" name="cpf">
    </div>

    <button type="submit">Create</button>
</form>
@endsection
