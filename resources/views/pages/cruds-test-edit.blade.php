{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Editar Teste de Cruds')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/cruds.js')}}"></script>
@endsection

<style>
  button:after { 
    margin-left:86% !important;
  }
</style>

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<section class="users-list-wrapper section">

  <div class="users-list-table">
    <div class="card">
      <div class="card-content">

        <div class="col s12">
            <h4 h4 class="card-title indigo-text pb-5"><strong>Editar Teste de Cruds</strong></h4>
        </div>
        <div class="col s12" id="account">

          <form action="/teste-crudes" method="POST">
            @csrf

            <div class="row">
              <div class="col s12 input-field">
                <input id="project_name" name="project_name" type="text" class="validate" required value="{{ $crudstestsystems->project_name }}">
                <label for="project_name">Nome do projeto</label>
                @error('project_name')
                <small class="red-text">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div class="col s12 pl-3">
              <div class="col s12 right-align pr-1 pb-3">
                <span class='mt-2 btn waves-effect waves-light green darken-1 add'>Modulo<i class="material-icons">add</i></span>
              </div>
            </div>

            <div class='accordion accordion-flush' id='accordionElement'>
              <div class='element' id='module-1'>

                @foreach($crudstestsystems->modules as $key => $module)
                <h2 class='accordion-header' id='flush-heading1'>
                  <button id='button_1' class='accordion-button bg-white collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#flush-collapse1' aria-expanded='true' aria-controls='flush-collapse1' style='box-shadow: none;'> 
                    Módulo 1
                    <span id='remove_1' class='remove' style='margin-left: 93%; color: red; position: absolute;'>
                      <i class='material-icons'>clear</i>
                    </span>
                  </button>
                </h2>
                <div id='flush-collapse1' class='accordion-collapse collapse show' aria-labelledby='flush-heading1'> 
                  <div class='accordion-body' id='teste1'>
                    <div class='col s12 input-field'>
                      <input id='name' name='modulos[1][name]' type='text' class='validate' required value="{{ $module->name }}"> 
                      <label for='name'>Nome do módulo</label>
                    </div>
                    <div class='right-align pr-1 pt-1'>
                      <span data-module='1' class='btn btn-floating waves-effect waves-light green darken-1 addDescription' style='border-radius: 5px; width:50px;'> 
                        <i class='material-icons'>add</i>
                      </span>
                    </div>
                    @foreach($module->requirements as $key => $requirements)
                    <div class='description-body'>
                      <div class='input-field col s12'>
                        <label for='descript'>Descrição</label>
                        <textarea id='descript' name='modulos["+ nextModule +"][description]' class='pt-2 materialize-textarea col s12'>{{ $requirements->description }}</textarea>  
                      </div>

                      <div class='col s6 input-field'>
                        <label  for='register'>Cadastrar</label>
                        <select class='mt-5 browser-default' id='register' name='modulos[1][register]'>
                          <option value='{{ $requirements->register }}' selected>{{ $requirements->register }}</option>
                          <option value='Funcionando'>Funcionando</option>
                          <option value='Não funciona'>Não funciona</option>
                          <option value='Em correção'>Em correção</option>
                        </select>
                      </div>
                      <div class='col s6 input-field'>
                        <label  for="view">Visualizar</label>
                        <select class='mt-5 browser-default' id='view' name='modulos[1][view]'>
                          <option value='{{ $requirements->view }}' selected>{{ $requirements->view }}</option>
                          <option value='Funcionando'>Funcionando</option>
                          <option value='Não funciona'>Não funciona</option>
                          <option value='Em correção'>Em correção</option>
                        </select>
                      </div>
                      <div class='col s6 input-field'>
                        <label  for='edit'>Editar</label>
                        <select class='mt-5 browser-default' id='edit' name='modulos[1][edit]'>
                          <option value='{{ $requirements->edit }}' selected>{{ $requirements->edit }}</option>
                          <option value='Funcionando'>Funcionando</option>
                          <option value='Não funciona'>Não funciona</option>
                          <option value='Em correção'>Em correção</option>
                        </select>
                      </div>
                      <div class='col s6 input-field'>
                        <label  for='delete'>Excluir</label>
                        <select class='mt-5 browser-default' id='delete' name='modulos[1][delete]'>
                          <option value='{{ $requirements->delete }}' selected>{{ $requirements->delete }}</option>
                          <option value='Funcionando'>Funcionando</option>
                          <option value='Não funciona'>Não funciona</option>
                          <option value='Em correção'>Em correção</option>
                        </select>
                      </div>

                      <div class='accordion-item descricao' id='desc_0'></div>
                      <div class='pb-4 col s12 right-align'>
                        <span id='remove_" + nextModule + "' class='mt-4 red btn btn-floating btn-reset remove' style='border-radius: 5px; width:50px;'>
                          <i class='material-icons'>clear</i>
                        </span>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                @endforeach

              </div>
            </div>

            <div class="col s12 display-flex justify-content-end mt-3">
              <button type="submit" class="btn indigo">
                  Salvar
              </button>
              <button type="cancel" class="btn btn-light">
                  Cancelar
              </button>
            </div>
          </form>

                    {{--  <div class="col s12 pl-3">
                      <div class="row element" id='rec_0'>
                        <div class="col s12 right-align pr-1">
                          <span class='mt-2 btn waves-effect waves-light green darken-1 add'>Modulo<i class="material-icons">add</i></span>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5 col s12 input-field">
                      <input id="name" name="modulos[1][name]" type="text" class="validate" data-error=".errorTxt2">
                      <label for="name">Modulos</label>
                      @error('name')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="col s10 input-field">
                      <input id="description" name="modulos[1][description]" type="text" class="validate" data-error=".errorTxt3">
                      <label for="description">Descrição</label>
                      @error('description')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class='col s2 right-align pr-1 pt-1'>
                      <span class='mt-4 btn btn-floating waves-effect waves-light green darken-1 mr-4 addl' style='border-radius: 5px; width:50px;'>
                        <i class='material-icons'>add</i>
                      </span>
                      <span class='mt-4 red btn btn-floating btn-reset remove' id='remove_" + nextindex + "' style='border-radius: 5px; width:50px;'>
                        <i class='material-icons'>clear</i>
                      </span>
                    </div>

                    <div class="col s5 input-field">
                      <label  for="register">Cadastrar</label>
                      <select class="mt-4 browser-default" id="register" name="modulos[1][register]">
                        <option value="" disabled="" selected=""></option>
                        <option value="Funcionando">Funcionando</option>
                        <option value="Não funciona">Não funciona</option>
                        <option value="Em correção">Em correção</option>
                      </select>
                    </div>
                    <div class="col s5 input-field">
                      <label  for="view">Visualizar</label>
                      <select class="mt-4 browser-default" id="view" name="modulos[1][view]">
                        <option value="" disabled="" selected=""></option>
                        <option value="Funcionando">Funcionando</option>
                        <option value="Não funciona">Não funciona</option>
                        <option value="Em correção">Em correção</option>
                      </select>
                    </div>
                    <div class="col s5 input-field">
                      <label  for="edit">Editar</label>
                      <select class="mt-4 browser-default" id="edit" name="modulos[1][edit]">
                        <option value="" disabled="" selected=""></option>
                        <option value="Funcionando">Funcionando</option>
                        <option value="Não funciona">Não funciona</option>
                        <option value="Em correção">Em correção</option>
                      </select>
                    </div>
                    <div class="col s5 input-field">
                      <label  for="delete">Excluir</label>
                      <select class="mt-4 browser-default" id="delete" name="modulos[1][delete]">
                        <option value="" disabled="" selected=""></option>
                        <option value="Funcionando">Funcionando</option>
                        <option value="Não funciona">Não funciona</option>
                        <option value="Em correção">Em correção</option>
                      </select>
                    </div>  --}}
                {{--  </div>

                <div class="col s12 display-flex justify-content-end mt-3">
                    <button type="submit" class="btn indigo">
                        Salvar
                    </button>
                    <button type="cancel" class="btn btn-light">
                        Cancelar
                    </button>
                </div>
              </div>
          </form>  --}}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection