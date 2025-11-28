@extends('layout')
@section('content')
    <div class="container">
        <div class="container">

            <!-- hero bootstrap -->
            <div class="px-4 py-5 my-5 text-center"> <img class="d-block mx-auto mb-4"
                    src="{{ asset('storage/logo.png') }}" alt="logo-eco-bazinga" width="72" height="57">
                <h1 class="display-5 fw-bold text-body-emphasis">Eco Bazinga</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Sistema de recompensas para trabalhos ecologicos, é um programa que estimula pessoas a realizarem ações ecológicas — como reciclagem, economia de água, plantio de árvores e participação em mutirões ambientais — oferecendo pontos que podem ser trocados por benefícios. Cada atividade é registrada e validada, gerando “EcoPoints” que o usuário pode usar para ganhar descontos, brindes, créditos em serviços ou vantagens em parceiros sustentáveis. Assim, o sistema transforma boas práticas ambientais em recompensas reais, incentivando hábitos sustentáveis de forma simples, motivadora e contínua.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
                        <button type="button"
                            class="btn btn-primary btn-lg px-4 gap-3"><a href="http://127.0.0.1:8000/category" style="text-decoration: none; color: white;">Categorias</a></button>
                        <button type="button"
                            class="btn btn-outline-secondary btn-lg px-4"><a style="text-decoration: none;" href="https://github.com/FranBR76/bazinga">GitHub</a></button> 
                    </div>
                </div>
            </div>




            <img class="img-fluid w-100" src="{{ asset('storage/capa.png') }}" alt="Capa"></img>
        </div>
@endsection
</div>