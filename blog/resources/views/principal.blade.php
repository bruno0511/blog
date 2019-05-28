@include('cabecalho')



<div class="container">
    <div class="row">
      <div class="col-2">
        Lado esquerdo<br>
        Icone 1<br>
        Icone 2<br>
        Icone 3<br>
        Icone 4<br>
      </div>
    <div class="col-8">
        {{--Bloco com conteudo pincipal--}}
        @yield('conteudo-principal')
    </div>
        <div class="col-2">
             Lado direito<br>
             Icone 1<br>
             Icone 2<br>
             Icone 3<br>
             Icone 4<br>
        </div>
    </div>

</div>

@include('rodape')
