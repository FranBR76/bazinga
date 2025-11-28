@extends('layout')
@section('content')

  <div class="p-4 mb-3 bg-body-tertiary rounded">
    <h4 class="fst-italic">Recompensas</h4>
    <p class="mb-0">Gerencie as recompensas que seus usuários podem resgatar com pontos.</p>
  </div>
  <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('reward.index')}}" class="nav-link active">Ver Todas</a></li>
        <li class="nav-item"><a href="{{route('reward.create')}}" class="nav-link">Criar Nova</a></li>
      </ul>
    </header>
  </div>
  
  @if(count($reward) > 0)
    <table class="table table-dark table-striped">
      <thead class="table-success">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Pontos Necessários</th>
          <th scope="col">Editar</th>
          <th scope="col">Mostrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($reward as $rew)
          <tr>
            <th scope="row">{{$rew->id}}</th>
            <td>{{$rew->name}}</td>
            <td>{{Str::limit($rew->description, 80)}}</td>
            <td>{{$rew->required_points}}</td>
            <td><a href="{{route('reward.edit', $rew->id)}}"><button type="button" class="btn btn-success">Editar</button></a></td>
            <td><a href="{{route('reward.show', $rew->id)}}"><button type="button" class="btn btn-success">Mostrar</button></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <div class="col-12">
        <div class="p-5 text-center bg-light rounded-3 border border-secondary border-2 border-dashed">
            <i class="bi bi-trophy" style="font-size: 4rem; color: #6c757d;"></i>
            <h3 class="mt-3">Nenhuma recompensa disponível</h3>
            <p class="lead">Crie a primeira recompensa para começar a motivar seus usuários!</p>
            <a href="{{route('reward.create')}}" class="btn btn-primary btn-lg mt-3">
                <i class="bi bi-plus-circle me-2"></i>Criar Primeira Recompensa
            </a>
        </div>
    </div>
  @endif
@endsection