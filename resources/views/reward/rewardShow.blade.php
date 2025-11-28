@extends ('layout')
@section ('content')

@if(session()->has('message'))
    {{session()->get('message')}}
@endif

<form action="{{route('reward.destroy',  $reward->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <legend>Mostrar Recompensa</legend>
    <div class="mb-3">
        <label for="nameInput" class="form-label">Nome</label>
        <input type="text" id="nameInput" name="name" class="form-control" placeholder="{{$reward->name}}">
    </div>
    <div class="mb-3">
        <label for="descriptionInput" class="form-label">Descrição</label>
        <input type="text" id="descriptionInput" name="description" class="form-control" placeholder="{{$reward->description}}">
    </div>
    <div class="mb-3">
        <label for="pointsInput" class="form-label">Pontos necessários</label>
        <input type="text" id="pointsInput" name="required_points" class="form-control" placeholder="{{$reward->required_points}}">
    </div>
    <button type="submit" class="btn btn-danger">Excluir</button>
</form>
@endsection