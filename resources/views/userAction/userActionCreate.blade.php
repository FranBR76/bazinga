@extends('layout')
@section('content')
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
        <li class="nav-item"><a href="{{route('useraction.index')}}" class="nav-link " class="nav-link">Ações de usuario</a></li>
        <li class="nav-item"><a href="{{route('useraction.create')}}" class="nav-link active">Criar ações de usuario</a></li>
      </ul>
    </header>
  </div>
<form action="{{route('useraction.store')}}" method="POST">
@csrf

    <legend>Adicionar Action</legend>
    <label for="user">Escolha um usuario:</label>
        <select class="form-select" aria-label="Default select example" name="user">
          <option value="">--Selecione--</option>
          @foreach($user as $u)
            <option value="{{$u->id}}">{{$u->name}}</option>
          @endforeach
        </select>
    <label for="action">Escolha uma acao :</label>
        <select class="form-select" aria-label="Default select example" name="action">
          <option value="">--Selecione--</option>
          @foreach($actions as $a)
            <option value="{{$a->id}}">{{$a->title}}</option>
          @endforeach
        </select>

    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Quantidade</label>
        <input type="text" id="disableTextInput" name="quantity" value="{{ old('quantity') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Data</label>
        <input type="date" id="disableTextInput" name="date" value="{{ old('date') }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
   
    </form>
    @endsection