@extends('layout')
@section('content')

  <div class="p-4 mb-3 bg-body-tertiary rounded">
    <h4 class="fst-italic">Ações</h4>
    <p class="mb-0">Crie as ações e suas descrições.</p>
  </div>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('action.index')}}" class="nav-link active" class="nav-link">Ações</a></li>
        <li class="nav-item"><a href="{{route('action.create')}}" class="nav-link">Criar ações</a></li>
      </ul>
    </header>
  </div>
  <table class="table table-dark table-striped">
    <thead class="table-danger">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Pontos</th>
        <th scope="col">Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Mostrar</th>
      </tr>
    <tbody>
      @foreach($actions as $at)
        <tr>
          <th scope="row">{{$at->id}}</th>
          <td>{{$at->title}}</td>
          <td>{{$at->description}}</td>
          <td>{{$at->points}}</td>
          <td>{{$at->categories->name}}</td>
          <td><a href="{{route('action.edit', $at->id)}}"><button type="button" class="btn btn-success" hres>Editar</button>
          </td>
          <td><a href="{{route('action.show', $at->id)}}"><button type="button" class="btn btn-success"
                hres>Mostrar</button></td>
        </tr>
      @endforeach
    </tbody>
    </thead>
  </table>
@endsection