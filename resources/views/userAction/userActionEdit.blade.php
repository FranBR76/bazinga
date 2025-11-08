@extends('layout')
@section('content')
@if(session()->has('message'))
    {{session()->get('message')}}
@endif
<form action="{{route('useraction.update', $usreaction->id)}}" method="POST">
@csrf
@method('PUT')
 <legend>Editar Ação do usuario</legend>
    <label for="categoria">Escolha um usuario:</label>
        <select class="form-select" aria-label="Default select example" name="user">
          <option value="">--Selecione--</option>
          @foreach($user as $u)
            <option value="{{$u->id}}">{{$u->name}}</option>
          @endforeach
        </select>
    <label for="categoria">Escolha um :</label>
        <select class="form-select" aria-label="Default select example" name="actions">
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