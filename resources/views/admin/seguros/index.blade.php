@extends('layouts.app')

@section('content')

<pagina tamanho="12"style="font-family: Times New Roman; font-size: 20px">

    @if($errors->all())
      <div class="alert alert-danger alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @foreach ($errors->all() as $key => $value)
          <li><strong>{{$value}}</strong></li>
        @endforeach
      </div>
    @endif
    
  
    <painel titulo="Seguros">    
    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <tabela-lista 
    v-bind:titulos="['#', 'Apólice', 'CPF', 'Placa', 'Valor']"
    v-bind:itens="{{$listaSeguros}}"
    ordem="asc" ordemCol="2"
    criar="#criar" editar="/admin/seguros/" deletar="/admin/seguros/" token="{{ csrf_token() }}"
    modal="sim"
    
    ></tabela-lista>
    
     
    </painel>
</pagina>

<modal nome="adicionar" titulo="Adicionar"style="font-family: Times New Roman">
<formulario id="formAdicionar" css="" action="{{route('seguros.store')}}" method="post" enctype="" token="{{ csrf_token() }}">
  <div class="form-group">
    <label for="titulo">Apólice</label>
    <input type="text" class="form-control" id="apolice" name="apolice" placeholder="Apolice" value="{{old('apolice')}}">  
  </div>
  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF / CNPJ"  value="{{old('cpf')}}">
  </div>
  <div class="form-group">
    <label for="placa">Placa</label>
    <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa"  value="{{old('placa')}}">
  </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor"  value="{{old('valor')}}">
  </div>
  
</formulario>
<span slot="botoes">
  <button form="formAdicionar" class="btn btn-info">Adicionar</button>
</span>
  </modal>

  <modal nome="editar" titulo="Editar"style="font-family: Times New Roman">
  <formulario id="formEditar" v-bind:action="'/admin/seguros/' + $store.state.item.id" method="put" enctype="" token="{{ csrf_token() }}">
    <div class="form-group">
      <label for="apolice">Apólice</label>
      <input type="text" class="form-control" id="apolice" name="apolice" placeholder="Apolice" v-model="$store.state.item.apolice">
    </div>
    <div class="form-group">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" v-model="$store.state.item.cpf">
    </div>
    <div class="form-group">
      <label for="placa">Placa</label>
      <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa" v-model="$store.state.item.placa">
    </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor" v-model="$store.state.item.valor">
  </div>    
</formulario>
    <span slot="botoes">
     <button form="formEditar" class="btn btn-info">Atualizar</button>
    </span>
  </modal>
 
@endsection