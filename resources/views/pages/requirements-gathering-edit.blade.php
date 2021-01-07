{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Levantamento de Requisitos')

{{-- vendors styles --}}
@section('page-style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-wizard.css')}}">
@endsection
{{-- page script --}}
{{--  @section('page-script')
<script src="{{asset('js/scripts/script-requirements-gathering.js')}}"></script>
@endsection  --}}

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section users-view">
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s6">
          <h4 h4 class="card-title indigo-text pb-5"><strong>Levantamento de Requisitos</strong></h4>
        </div>
        <form action="/requisitos/{{ $requirementsgathering->id }}" method="POST">
          @csrf
          <div class="col s12">
            <div class="col s6">
              <label for="lr_id">Nº LR</label>
              <input type="text" name="lr_id" value="{{ $requirementsgathering->lr_id }}">
              
              <label for="version">Versão</label>
              <input type="text" name="version" value="{{ $requirementsgathering->version }}">
            </div>
            <div class="col s6 pb-3">
              <label for="project_name">Nome do projeto</label>
              <input type="text" name="project_name" value="{{ $requirementsgathering->project_name }}">
    
              <label for="date">Data</label>
              <input type="date" name="date" value="{{ $requirementsgathering->date }}">
            </div>
            <div class="right-align pb-2">
              @role('edit|create|admin')
                <button type="submit" class="btn-small indigo">
                  Salvar
                </button>
              @endrole
              <a href="" class="btn-small btn-light">
                Cancelar
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12">

          @foreach($requirementsgathering->titles as $key => $title)
            <table class="table bordered  responsive-table mb-5">
              <thead>
                <tr>
                  <th colspan="2" class="center-align" style="background-color: #D8D8D8;">
                    <div class="col s10 pl-5 pt-1">{{ $title->titles }}</div>
                    
                    <!-- Modal buttons -->
                    <div class="col s2 right-align">
                      @role('edit|create|admin')
                        <a href="#modal-title-{{ $title->id }}" 
                        class="btn-menu modal-trigger btn-small indigo btn-floating" 
                        style="border-radius: 5px; width:35px;" 
                        data-requirements-id="{{ $title->requirements_id }}" data-name="{{ $title->titles }}">
                          <i class="material-icons mb-5">edit</i>
                        </a>
                      @endrole
                      @role('delete|admin')
                        <a href="/requisitos/apagar/{{ $title->id }}" class="btn-small indigo btn-floating" style="border-radius: 5px; width:35px;">
                          <i class="material-icons mb-5">delete_forever</i>
                        </a>
                      @endrole
                    </div>

                    <!-- Modal Title -->
                    <form  action="/requisitos/{{ $title->id }}" method="POST">
                      @csrf
                      <div id="modal-title-{{ $title->id }}" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <div class="container">
                            <div class="row pl-5 pr-5">
                              <h5 class="pb-5 pt-5">Adicione um título</h5>
                              <div class="col s12 input-field">
                                <input id="titles" name='titles' type="text" class="validate" value="{{ $title->titles }}" required>
                                <label for="titles">Título</label>
                                @error('titles')
                                <small class="red-text">{{ $message }}</small>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="modal-close waves-effect btn-light-red btn modal-trigger">Cancelar</a>
                          <button type="submit" class="waves-effect waves-light btn green modal-trigger">Salvar</button>
                        </div>
                      </div>
                    </form>
                  </th>
                </tr>
              </thead>

              @foreach($title->menu()->withCount('description')->get() as $key => $menu)
                <tr>
                  <td class="center-align" style="width: 225px; background-color: #E8E8E8" rowspan="{{ $menu->description_count }}">
                    {{ $menu->menu }}

                    <!-- Modal buttons -->
                    <div class="pb-3">
                      @role('edit|admin')
                        <a href="#modal-menu-{{ $menu->id }}" class="btn-description modal-trigger btn-small indigo btn-floating" style="border-radius: 5px; width:35px;" >
                          <i class="material-icons mb-5">edit</i>
                        </a>
                      @endrole
                      @role('delete|admin')
                        <a href="/requisitos/apagar/{{ $menu->id }}" class="btn-small indigo btn-floating" style="border-radius: 5px; width:35px;">
                          <i class="material-icons mb-5">delete_forever</i>
                        </a>
                      @endrole
                    </div>

                    <!-- Modal Menu -->
                    <form action="/requisitos/{{ $menu->id }}" method="POST">
                      @csrf
                      <div id="modal-menu-{{ $menu->id }}" class="modal modal-fixed-footer" aria-hidden="true">
                        <div class="modal-content">
                          <div class="container">
                            <div class="row pl-5 pr-5">
                              <h5 class="pb-5 pt-5">Adicione um menu</h5>
                              <div class="col s12 input-field">
                                <input id="menu" name='menu' type="text" class="validate" value="{{ $menu->menu }}" required>
                                <label for="menu">Menu</label>
                                @error('menu')
                                <small class="red-text">{{ $message }}</small>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a class="modal-close waves-effect btn-light-red btn modal-trigger">Cancelar</a>
                          <button type="submit" class="waves-effect waves-light btn green modal-trigger">Salvar</button>
                        </div>
                      </div>
                    </form>
                  </td>

                  @foreach($menu->description as $key => $description)
                  <td class="p-5 text-justify row" >
                    <div class="col s10">
                      {{ $description->description }}
                    </div>

                    <!-- Modal Description -->
                    <div class="col s2 right-align pl-1">
                      @role('edit|admin')
                        <a href="#modal-description-{{ $description->id }}" class="btn-description modal-trigger btn-small indigo btn-floating" style="border-radius: 5px; width:35px;">
                          <i class="material-icons mb-5">edit</i>
                        </a>
                      @endrole
                      @role('delete|admin')
                        <a href="/requisitos/apagar/{{ $description->id }}" class="btn-small indigo btn-floating" style="border-radius: 5px; width:35px;">
                          <i class="material-icons mb-5">delete_forever</i>
                        </a>
                      @endrole
                    </div>
                    
                    <!-- Modal Description -->
                    <form action="/requisitos/{{ $description->id }}" method="POST">
                      @csrf
                      <div id="modal-description-{{ $description->id }}" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <div class="container">
                            <div class="row pl-5 pr-5">
                              <h5 class="pb-5 pt-5">Adicione uma descrição</h5>
                              <div class="col s12 input-field">
                                <textarea id="description" name="description" class="materialize-textarea ">{{ $description->description }}</textarea>
                                <label for="description">Descrição</label>
                                  @error('description')
                                <small class="red-text">{{ $message }}</small>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="modal-action modal-close waves-effect btn-light-red btn modal-trigger">Cancelar</a>
                          <button class="waves-effect waves-light btn green modal-trigger">Salvar</button>
                        </div>
                      </div>
                    </form>
                  </td>
                </tr>
                <tr>
                  @endforeach
                </tr>
              @endforeach
            </table>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/form-wizard.js')}}"></script>
@endsection