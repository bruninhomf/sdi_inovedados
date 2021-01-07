{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Levantamento de requisitos')

{{-- page style --}}
@section('page-style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-wizard.css')}}">
@endsection

{{-- page content  --}}
@section('content')
<div class="section users-view">
  <div class="card-panel">
    <div class="row">
      <div class="col s12 m7">
        <div class="display-flex media">
          <div class="media-body pl-2">
            <h5 class="media-heading pt-1">
              <span class="users-view-">Levantamento de Requisitos</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2" width="500">
        <a href="/requisitos" class="btn-small btn-light-indigo">
          <i class="material-icons mb-5">arrow_back</i>
        </a>
        @role('print|admin')
        <a href="/requisitos/excel/{{ $requirementsgathering->id }}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">file_download</i>
          Excel
        </a>
        <a href="/requisitos/pdf/{{ $requirementsgathering->id }}" class="btn-small btn-waves-light">
          <i class="material-icons mb-3">print</i>
          PDF
        </a>
        @endrole
        @role('edit|admin')
        <a href="/requisitos/editar/{{ $requirementsgathering->id }}" class="btn-small indigo">
          <i class="material-icons mb-5">edit</i>
          Editar
        </a>
        @endrole
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s12">
          
          <!-- Modal buttons -->
          <div class="right-align pb-3">
            @role('edit|create|admin')
              <a href="#modal1" class="btn-small indigo modal-trigger">
                <i class="material-icons mb-5">add</i>
                Titulo
              </a>
            @endrole
          </div>

          <!-- Modal Title -->
          <form  action="/{{ $requirementsgathering->id }}/titulo/" method="POST">
            @csrf
            <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content">
                <div class="container">
                  <div class="row pl-5 pr-5">
                    <h5 class="pb-5 pt-5">Adicione um título</h5>
                    <div class="col s12 input-field">
                      <input id="titles" name='titles' type="text" class="validate" required>
                      <input class="hide" id="requirements_id" name='requirements_id' type="text" value="{{ $requirementsgathering->id }}">
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

          <!-- Modal Menu -->
          <form action="/{{ $requirementsgathering->id }}/menu/" method="POST">
            @csrf
            <div id="modal2" class="modal modal-fixed-footer" aria-hidden="true">
              <div class="modal-content">
                <div class="container">
                  <div class="row pl-5 pr-5">
                    <h5 class="pb-5 pt-5">Adicione um menu</h5>
                    <div class="col s12 input-field">
                      <input id="menu" name='menu' type="text" class="validate" required>
                      <label for="menu">Menu</label>
                        <input class="hide" id="titles_id" name='titles_id' type="text" value="">
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

          <!-- Modal Description -->
          <form action="/{{ $requirementsgathering->id }}/descricao/" method="POST">
            @csrf
            <div id="modal3" class="modal modal-fixed-footer">
              <div class="modal-content">
                <div class="container">
                  <div class="row pl-5 pr-5">
                    <h5 class="pb-5 pt-5">Adicione uma descrição</h5>
                    <div class="col s12 input-field">
                      <input id="description" name='description' type="text" class="validate" required>
                      <label for="description">Descrição</label>
                          <input class="hide" id="menu_id" name='menu_id' type="text" value="">
                      @error('description')
                      <small class="red-text">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a class="modal-action modal-close waves-effect btn-light-red btn modal-trigger">Cancelar</a>
                <button class="waves-effect waves-light btn green modal-trigger">Salvar</button>
              </div>
            </div>
          </form>

          <table class="striped text-nowrap">
            <tbody>
              <tr>
                <td>Nº LR:</td>
                <td width="30%">{{ $requirementsgathering->lr_id }}</td>
                <td class="left-align" width="150px">Nome do projeto:</td>
                <td class="left-align">{{ $requirementsgathering->project_name }}</td>
              </tr>
              <tr>
                <td>Versão:</td>
                <td>{{ $requirementsgathering->version }}</td>
                <td>Data:</td>
                <td>{{ date('d/m/Y', strtotime($requirementsgathering->date)) }}</td>
              </tr>
            </tbody>
          </table>
        </div>
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
                    <div class="col s11 pl-5 pt-1">{{ $title->titles }}</div>
                    <!-- Modal buttons -->
                    <div class="col s1 right-align">
                      @role('edit|create|admin')
                        <a href="#modal2" class="btn-menu modal-trigger btn-small indigo btn-floating" style="border-radius: 5px; width:35px;" data-id="{{ $title->id }}">
                          <i class="material-icons mb-5">add</i>
                        </a>
                      @endrole
                    </div>
                  </th>
                </tr>
              </thead>
              @foreach($title->menu()->withCount('description')->get() as $key => $menu)
                <tr>
                  <td class="center-align" style="width: 225px; background-color: #E8E8E8" rowspan="{{ $menu->description_count }}">
                    {{ $menu->menu }}
                    <div class="pb-3">
                      @role('edit|create|admin')
                        <a href="#modal3" class="btn-description modal-trigger btn-small indigo btn-floating" style="border-radius: 5px; width:35px;" data-id="{{ $menu->id }}">
                          <i class="material-icons mb-5">add</i>
                        </a>
                      @endrole
                    </div>
                  </td>
                  @foreach($menu->description as $key => $description)
                  <td class="p-5 text-justify" >
                    {{ $description->description }}
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


{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('js/requirementsGathering.js')}}"></script>
<script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/form-wizard.js')}}"></script>
@endsection