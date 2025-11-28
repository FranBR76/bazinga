@extends('layout')
@section('content')

 <div class="p-4 mb-3 bg-body-tertiary rounded">
    <h4 class="fst-italic">Ações de Usuario</h4>
    <p class="mb-0">Crie as ações vinculadas por usuario.</p>
  </div>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('useraction.index')}}" class="nav-link active" class="nav-link">Ações de usuario</a></li>
        <li class="nav-item"><a href="{{route('useraction.create')}}" class="nav-link">Criar ações de usuario</a></li>
      </ul>
    </header>
  </div>
<table class="table table-dark table-striped" >
   <thead class="table-secondary">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Ação</th>
      <th scope="col">Categoria</th>
      <th scope="col">Pontuação</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Total</th>
      <th scope="col">Data</th>
      <th scope="col">Editar</th>
      <th scope="col">Mostrar</th>
    </tr>
    <tbody>
        @foreach($userActions as $ua)
    <tr>
      <th scope="row">{{$ua->id}}</th>
      <td>{{$ua->user->name}}</td>
      <td>{{$ua->action->title}}</td>
      <td>{{$ua->action->categories->name}}</td>
      <td>{{$ua->action->points}}</td>
      <td>{{$ua->quantity}}</td>
      <td>{{$ua->quantity*$ua->action->points}}</td>
      <td>{{Carbon\Carbon::parse($ua->date)->format('d/m/Y') }}</td>
      <td><a href="{{route('useraction.edit', $ua->id)}}"><button type="button" class="btn btn-success" hres>Editar</button></td>
      <td><a href="{{route('useraction.show', $ua->id)}}"><button type="button" class="btn btn-success" hres>Mostrar</button></td>
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>
@endsection