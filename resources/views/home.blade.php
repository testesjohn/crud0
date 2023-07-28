@extends('layout.layout')
@section('title', 'home')
@section('content')
    <h1>Home</h1>

    <table>
        <thead>
            <td>
                <th>ID</td>
                <th>NOME</td>
                <th>EMAIL</td>
                <th>AÇÕES</th>
            </td>
        </thead>
        @foreach($pessoas as $pessoa)
        <tbody>
            <td>
                <th>{{$loop->index + 1}}</th>
                <th>{{$pessoa['name']}}</th>
                <th>{{$pessoa['email']}}</th>
                <th>
                    <a href="{{route('edit', $pessoa["id"])}}">Editar</a>
                    <form action="{{route('destroy', $pessoa["id"])}}" method="post">
                        @csrf
                        @method('delete')

                        <button type="submit">Delete</button>
                    </form>
                </th>
            </td>
        </tbody>
        @endforeach

    </table>

@endsection
