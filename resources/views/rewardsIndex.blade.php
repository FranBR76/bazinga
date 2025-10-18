@extends('layout')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Pontos necessários</th>
                <th scope="col">Editar</th>
                <th scope="col">Mostrar</th>
                
            </tr>
            <tbody>
                @foreach ($rewards as $rew)
                
                <tr>
                    <th scope="row">{{ $rew->id }}</th>
                    <td>{{ $rew->name }}</td>
                    <td>{{ $rew->description }}</td>
                    <td>{{ $rew->required_points }}</td>
                    <td><a href="#"><button type="button" class="btn btn-success" hres>Editar</button></a></td>
                    <td><a href="#"><button type="button" class="btn btn-success" hres>Mostrar</button></a></td>
                </tr>
                @endforeach
                
            </tbody>
        </thead>
    </table>
@endsection