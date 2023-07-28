@extends('layout.layout')
@section('title', 'edit')
@section('content')
<h1>Create</h1>

<form action="{{route('update', $pessoa->id)}}" method="post">
    @csrf
    @method('put')

    <div>
        <label>Nome:</label>
        <input type="text" name="name" value="{{$pessoa->name}}">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{$pessoa->email}}">
    </div>
    <div>
        <label>Cpf:</label>
        <input type="text" name="cpf" value="{{$pessoa->cpf}}">
    </div>

    <button type="submit">Update</button>
</form>
@endsection
