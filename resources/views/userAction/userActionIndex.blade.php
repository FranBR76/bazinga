@extends('layout')
@section('content')
<table class="table table-dark table-striped" >
   <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Ação</th>
      <th scope="col">Categoria</th>
      <th scope="col">Pontuação</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Data</th>
      <th scope="col">Editar</th>
      <th scope="col">Mostrar</th>
    </tr>
    <tbody>
        @foreach($userActions as $ua)
    <tr>
      <th scope="row">{{$ua->id}}</th>
      <td>{{$ua->user}}</td>
      <td>{{$ua->action}}</td>
      <td>{{$ua->action->categories->name}}</td>
      <td>{{$ua->action->categories->points}}</td>
      <td>{{$ua->quantity}}</td>
      <td>{{$ua->date}}</td>
      <td><a href="{{--route('action.edit', $at->id)--}}"><button type="button" class="btn btn-success" hres>Editar</button></td>
      <td><a href="{{--route('action.show', $at->id)--}}"><button type="button" class="btn btn-success" hres>Mostrar</button></td>
    </tr>
    @endforeach
    </tbody>
  </thead>
</table>
@endsection