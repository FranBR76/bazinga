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

<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('reward.index')}}" class="nav-link">Ver Todas</a></li>
            <li class="nav-item"><a href="{{route('reward.create')}}" class="nav-link active">Criar Nova</a></li>
        </ul>
    </header>
</div>

<form action="{{route('reward.store')}}" method="POST">
    @csrf
    <legend>Adicionar Recompensa</legend>
    <div class="mb-3">
        <label for="nameInput" class="form-label">Nome</label>
        <input type="text" id="nameInput" name="name" class="form-control" value="{{old('name')}}">
    </div>
    <div class="mb-3">
        <label for="descriptionInput" class="form-label">Descrição</label>
        <input type="text" id="descriptionInput" name="description" class="form-control" value="{{old('description')}}">
    </div>
    <div class="mb-3">
        <label for="pointsInput" class="form-label">Pontos necessários</label>
        <input type="text" id="pointsInput" name="required_points" class="form-control" value="{{old('required_points')}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection