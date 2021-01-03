{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Levantamento de Requisitos')

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
              <h4 h4 class="card-title indigo-text pb-5"><strong>Levantamento de Requisitos</strong></h4>
          </div>
          <div class="col s12" id="account">
              
            <form action="/requisitos/{{ $requirementsgathering->id }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                      <div class="col s12 input-field">
                        <input id="project_name" name="project_name" type="text" value="{{ $requirementsgathering->project_name }}" class="validate" required>
                        <label for="project_name">Nome do Projeto</label>
                        @error('project_name')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                      </div>
                      <div class="col s4 input-field">
                        <input id="lr_id" name="lr_id" type="text" value="{{ $requirementsgathering->lr_id }}" class="validate" required>
                        <label for="lr_id">Nº LR</label>
                        @error('lr_id')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                      </div>
                      <div class="col s4 input-field">
                        <input id="version" name="version" type="text" value="{{ $requirementsgathering->version }}" class="validate" required>
                        <label for="version">Versão</label>
                        @error('version')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                      </div>
                      <div class="col s4 input-field">
                        <input id="date" name="date" type="date" value="{{ $requirementsgathering->date }}" class="validate" required>
                        <label for="date">Data</label>
                        @error('date')
                        <small class="red-text">{{ $message }}</small>
                        @enderror
                      </div>
                    </div>
                  </div>
                  

                      <div class="row lvrec pl-1" id='lr_"+ nextindex +"'>
                        <div class="col s10 input-field">
                          <input id="titles" name='modulos["+ nextindex +"][titles]' type="text" value="{{ $requirementsgathering->id }}" class="validate" required>
                          <label for="titles">Titulo</label>
                          @error('titles')
                          <small class="red-text">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col s2 right-align pr-1 pt-1">
                          <span class='mt-2 btn waves-effect waves-light green darken-1 mr-1 mb-2 add' style="margin-right: 13px">Novo título <i class="material-icons">add</i></span>
                        </div>
                        
                        <div class="col s12 pl-3">
                          <div class="row " id='div'>
                            <div class="col s10 input-field">
                              <input id="menu" name='modulos["+ nextindex +"][menu]' type="text" value="{{ $requirementsgathering->menu }}" class="validate" required>
                              <label for="menu">Menu</label>
                              @error('menu')
                              <small class="red-text">{{ $message }}</small>
                              @enderror
                            </div>
                            <div class="col s2 right-align pr-1 pt-1">
                              <span class='mt-2 btn waves-effect waves-light green darken-1 addl' style="margin-right: 10px">Menus <i class="material-icons">add</i></span>
                            </div>
                            <div class='element' id="lr_0">
                              <div class='elementt' id='menu_0'>
                                <div class='elementtt' id='desc_0'></div>
                              </div>
                            </div>
                            <div class="col s12 pl-3">
                              <div class="row " id='div'>
                                <div class="col s10 input-field">
                                  <input id="description" name='modulos["+ nextindex +"][description]' type="text" value="{{ $requirementsgathering->description }}" class="validate" required>
                                  <label for="description">Descrição</label>
                                  @error('description')
                                  <small class="red-text">{{ $message }}</small>
                                  @enderror
                                </div>
                                <div class="col s2 right-align pr-1 pt-1">
                                  <span class='mt-2 btn waves-effect waves-light green darken-1' style="margin-right: 7px">Descrições <i class="material-icons">add</i></span>
                                </div>
                              </div>
                            </div>
                          </div>
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