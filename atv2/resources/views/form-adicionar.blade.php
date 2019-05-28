@extends('principal')

@section('conteudo-principal')

<h2> Adicionar Post</h2>

<form method="post" action="{{url('/posts/adicionar')}}">
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text">
    </div>
    <div class="form-group">
        <label for="texto">Texto</label>
        <textarea id="texto" class="form-control" name="texto" rows="3" placeholder="Diegite o texto"></textarea>
    </div>
<button class= "btn btn-primary float-right mb-2" type="submit">Enviar</button>
</form>
@endsection
