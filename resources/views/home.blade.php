
@extends('layouts.app')

@section('content')
  <pagina tamanho="10">
    <painel titulo="">
    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <caixa qtd="William" titulo="CRUD SEGUROS" url="{{route('seguros.index')}}" cor="#797AF4" icone="ion ion-person-add"></caixa>
        </div>        
      </div>
    </painel>

  </pagina>
@endsection
