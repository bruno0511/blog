@include('cabecalho')



<div class="container">
    <div class="row">
      <div class="col-2">
        Lorem ipsum dolor sit amet.
      </div>
    <div class="col-8">
        {{--Bloco com conteudo pincipal--}}
        @yield('conteudo-principal')
    </div>
        <div class="col-2">
             Lorem ipsum dolor sit amet.
        </div>
    </div>

</div>

@include('rodape')
