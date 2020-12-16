{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Proposta - Hospedagem')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/custom/button.js')}}"></script>
{{--  <script src="{{asset('js/jquery-3.0.0.js')}}"></script>  --}}
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
                <h4 h4 class="card-title indigo-text pb-5"><strong>Teste - Requisitos</strong></h4>
            </div>
            <div class="col s12" id="account">
                <form action="/teste-requisitos/{{$requirementtestsystems->id}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col s12">
                        <div class="row">
                            <div class="col s12 input-field">
                              <input id="project_name" name="project_name" type="text" class="validate" data-error=".errorTxt2" value="{{ $requirementtestsystems->name_system }}">
                              <label for="project_name">Nome do projeto</label>
                              <small class="errorTxt2"></small>
                            </div>
                        </div>
                      </div>
                      <div class="col s12 pl-3">
                          <div class="row element" id='rec_0'>
                            <div class="col s12 right-align pr-1">
                              <span class='mt-2 btn waves-effect waves-light green darken-1 add'>Modulo<i class="material-icons">add</i></span>
                            </div>
                          </div>
                      </div>

                      {{--  @foreach($requirementtestsystems as $key => $requirementtestsystem)  --}}
  
                      <div class='col s12 input-field' id='"+ nextindex +"'>
                        <label for='name'>Módulo</label><input id='name' name='modulos["+ nextindex +"][name]' type='text' class='validate' data-error='.errorTxt1' value="{{ $requirementtestmodules->name }}">
                        <small class='errorTxt1'></small>
                      </div>   
                      {{--  @endforeach  --}}
                        <div class='row element' id='rec_0'>
                          <div class='col s12 right-align pr-1'>
                          <span class='mt-2 btn waves-effect waves-light green darken-1 addl'>
                            Modulo
                            <i class='material-icons'>add</i>
                          </span>
                        </div>
                      </div>   
                      <div class='col s12 input-field'>
                        <label for='description'>Descrição</label>
                        <textarea id='description' name='modulos["+ nextindex +"][description]' class='materialize-textarea'>{{ $requirementtestrequirements->description }}</textarea>
                        <small class='errorTxt2'></small>
                      </div>
                      @foreach($requirementtestmodules as $key => $requirementtestmodule)
                      {{ $requirementtestmodules->name }}
                      @endforeach
                      <div class='input-field col s12'>
                        <select class='browser-default' id='status' name='modulos["+ nextindex +"][status]' value="123">
                          <option selected>{{ $requirementtestrequirements->status }}</option>
                          <option value='Funcionando'>Funcionando</option>
                          <option value='Não funciona'>Não funciona</option>
                          <option value='Em correção'>Em correção</option>
                        </select>
                        <label style="margin-top: -25px">Situação</label>
                      </div>
                      <div class='col s12 right-align'>
                        <span id='remove_" + nextindex + "' class='red btn btn-reset remove'>
                          Cancelar 
                          <i class='material-icons'>clear</i>
                        </span>
                      </div>


                    {{--  <div class="col s12 pl-3">
                        <div class="row element-requirement" id='lr_0'>
                          <div class="col s12 right-align pr-1">
                            <span class='btn waves-effect waves-light green darken-1 addl'>Modulo<i class="material-icons">add</i></span>
                          </div>
                          <div class='col s12 input-field' id='"+ nextindex +"'>
                            <label for='name'>Titulo</label>
                            <input id='title' name='modulos["+ nextindex +"][title]' type='text' class='validate'>
                            <small class='errorTxt1'></small>
                          </div>
                          <div class='col s12 input-field'>
                            <label for='menu'>Menu</label>
                            <input id='menu' name='modulos["+ nextindex +"][menu]' type='text' class='col s10 validate'>
                            <div class='col s2 right-align pr-1 pt-1'>
                              <span class='mt-2 btn btn-floating waves-effect waves-light green darken-1 mr-4 addl' style='border-radius: 5px; width:50px;'>
                                <i class='material-icons'>add</i>
                              </span>
                              <span id='remove_" + nextindex + "' class='red btn btn-floating btn-reset remove' style='border-radius: 5px; width:50px;'>
                                <i class='material-icons'>clear</i>
                              </span>
                            </div>
                            <small class='errorTxt2'></small>
                          </div>
                          <div class='input-field col s12'>
                            <label for='description'>Descrição</label>
                            <input id='description' name='modulos["+ nextindex +"][description]' type='text' class='col s10 validate'>
                            <div class='col s2 right-align pr-1 pt-1'>
                              <span class='mt-2 btn btn-floating waves-effect waves-light green darken-1 mr-4 addl' style='border-radius: 5px; width:50px;'>
                                <i class='material-icons'>add</i>
                              </span>
                              <span id='lr_" + nextindex + "' class='red btn btn-floating btn-reset remov' style='border-radius: 5px; width:50px;'>
                                <i class='material-icons'>clear</i>
                              </span>
                            </div>
                            <small class='errorTxt1'></small>
                          </div>

                          <div class='col s12 right-align'>
                            <span id='lr_" + nextindex + "' class='red btn btn-reset remov'>
                              Cancelar <i class='material-icons'>clear</i>
                            </span>
                          </div>
                        </div>
                    </div>  --}}
                               
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
                <!-- users edit account form ends -->
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