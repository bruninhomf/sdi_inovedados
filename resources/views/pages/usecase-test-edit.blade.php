{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Teste de Caso de Uso')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/script-requirements-gathering.js')}}"></script>
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users list start -->
<section class="users-list-wrapper section">

  <div class="users-list-table">
    <div class="card">
      <div class="card-content">

        <div class="row">
          <div class="col s6">
              <h4 h4 class="card-title indigo-text pb-5"><strong>Teste de Caso de Uso</strong></h4>
          </div>
          <div class="col s12" id="account">

            <form action="/teste-caso-de-uso" method="POST">
                @csrf
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                      <div class="col s12 input-field">
                        <input id="project_name" name="project_name" type="text" class="validate" data-error=".errorTxt1">
                        <label for="project_name">Nome do Projeto</label>
                        <small class="errorTxt1"></small>
                        @error('project_name')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                      </div>

                      <div class="col s12 pl-3">
                        <div class="row element" id='rec_0'>
                          <div class="col s12 right-align pr-1">
                            <span class='mt-2 btn waves-effect waves-light green darken-1 add'>Modulo<i class="material-icons">add</i></span>
                          </div>
                        </div>
                      </div>
                      <div class="mb-5 col s12 input-field">
                        <input id="description" name="modulos[1][description]" type="text" class="validate" data-error=".errorTxt2">
                        <label for="description">Modulos</label>
                        @error('name')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                      </div>

                      <div class="col s10 input-field">
                        <input id="test" name="modulos[1][test]" type="text" class="validate" data-error=".errorTxt3">
                        <label for="test">Teste à executar</label>
                        <small class="errorTxt3"></small>
                      </div>
                      <div class='col s2 right-align pr-1 pt-1'>
                        <span class='mt-4 btn btn-floating waves-effect waves-light green darken-1 mr-4 addl' style='border-radius: 5px; width:50px;'>
                          <i class='material-icons'>add</i>
                        </span>
                        <span class='mt-4 red btn btn-floating btn-reset remove' id='remove_" + nextindex + "' style='border-radius: 5px; width:50px;'>
                          <i class='material-icons'>clear</i>
                        </span>
                      </div>

                      <div class="col s10 input-field">
                        <input id="result" name="modulos[1][result]" type="text" class="validate" data-error=".errorTxt3">
                        <label for="result">Resultado à apresentar</label>
                        <small class="errorTxt3"></small>
                      </div>
                      <div class="col s10 input-field">
                        <label  for="status">Situação</label>
                        <select class="mt-4 browser-default" id="status" name="modulos[1][status]">
                          <option value="" disabled="" selected=""></option>
                          <option value="Funcionando">Funcionando</option>
                          <option value="Não funciona">Não funciona</option>
                          <option value="Em correção">Em correção</option>
                        </select>
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
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- users list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection