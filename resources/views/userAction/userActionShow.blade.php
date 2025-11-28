@extends('layout')
@section('content')

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif

    <form action="{{route('useraction.destroy', $userAction->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <legend>Mostrar Ação de Usuário</legend>

        <div class="mb-3">
            <label for="idInput" class="form-label">ID</label>
            <input type="text" id="idInput" name="id" class="form-control" placeholder="{{$userAction->id}}" readonly>
        </div>

        <div class="mb-3">
            <label for="userInput" class="form-label">Usuário</label>
            <input type="text" id="userInput" name="user" class="form-control" placeholder="{{$userAction->user->name}}"
                readonly>
        </div>

        <div class="mb-3">
            <label for="actionInput" class="form-label">Ação</label>
            <input type="text" id="actionInput" name="action" class="form-control"
                placeholder="{{$userAction->action->title}}" readonly>
        </div>

        <div class="mb-3">
            <label for="categoryInput" class="form-label">Categoria</label>
            <input type="text" id="categoryInput" name="category" class="form-control"
                placeholder="{{$userAction->action->categories->name}}" readonly>
        </div>

        <div class="mb-3">
            <label for="pointsInput" class="form-label">Pontuação</label>
            <input type="text" id="pointsInput" name="points" class="form-control"
                placeholder="{{$userAction->action->points}}" readonly>
        </div>

        <div class="mb-3">
            <label for="quantityInput" class="form-label">Quantidade</label>
            <input type="text" id="quantityInput" name="quantity" class="form-control"
                placeholder="{{$userAction->quantity}}" readonly>
        </div>

        <div class="mb-3">
            <label for="totalInput" class="form-label">Total de Pontos</label>
            <input type="text" id="totalInput" name="total" class="form-control"
                placeholder="{{$userAction->quantity * $userAction->action->points}}" readonly>
        </div>

        <div class="mb-3">
            <label for="dateInput" class="form-label">Data</label>
            <input type="text" id="dateInput" name="date" class="form-control"
                placeholder="{{Carbon\Carbon::parse($userAction->date)->format('d/m/Y') }}" readonly>
        </div>

        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
@endsection