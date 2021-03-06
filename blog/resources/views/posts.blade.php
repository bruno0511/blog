@extends('principal')
@section('conteudo-principal')

       <h2>Posts</h2>
<a href="{{url('/posts/form-adicionar')}}" class= "btn btn-primary float-right mb-2">
    Adicionar</a>
       <table class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Data</th>
                <th>Opçoes</th>
            </tr>

@foreach ($posts as $posts)
       <tr>
           <td>{{$posts->id}}</td>
           <td>{{$posts->titulo}}</td>
           <td>{{$posts->texto}}</td>
           <td>{{$posts->created_at}}</td>
           <td>
                 <a class="btn btn-outline-secondary" href="{{url('/posts/editar/'.$posts->id)}}">Editar </a>
           </td>
           <td>
                 <a class="btn btn-outline-secondary" href="{{url('/posts/excluir/'.$posts->id)}}">Excluir</a>
           </td>

       </tr>

@endforeach
        </table>
@endsection
