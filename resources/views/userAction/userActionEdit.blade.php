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
<form action="{{ route('useraction.update', $useractions->id)}}" method="POST">
@csrf
@method('PUT')

    <legend>Adicionar Action</legend>
    <label for="user">Escolha um usuario:</label>
        <select class="form-select" aria-label="Default select example" name="user_id">
          <option value="{{ $user->id }}">{{ $user->name }}</option>
          @foreach($users as $u)
            <option value="{{$u->id}}">{{$u->name}}</option>
          @endforeach
        </select>
    <label for="action">Escolha uma ação :</label>
        <select class="form-select" aria-label="Default select example" name="action_id">
          <option value="{{ $action->id }}">{{ $action->title }}</option>
          @foreach($actions as $a)
            <option value="{{$a->id}}">{{$a->title}}</option>
          @endforeach
        </select>

    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Quantidade</label>
        <input type="text" id="disableTextInput" name="quantity" value="{{$useractions->quantity}}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Data</label>
        <input type="date" id="disableTextInput" name="date" value="{{$useractions->date}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
   
    </form>
    @endsection