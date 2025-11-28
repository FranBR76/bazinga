@extends ('layout')
@section ('content')

@if(session()->has('message'))
    {{session()->get('message')}}
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('reward.update',  $reward->id)}}" method="POST">
    @csrf
    @method('PUT')
    <legend>Editar Recompensa</legend>
    <div class="mb-3">
        <label for="nameInput" class="form-label">Nome</label>
        <input type="text" id="nameInput" name="name" class="form-control" value="{{$reward->name}}">
    </div>
    <div class="mb-3">
        <label for="descriptionInput" class="form-label">Descrição</label>
        <input type="text" id="descriptionInput" name="description" class="form-control" value="{{$reward->description}}">
    </div>
    <div class="mb-3">
        <label for="pointsInput" class="form-label">Pontos necessários</label>
        <input type="text" id="pointsInput" name="required_points" class="form-control" value="{{$reward->required_points}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection